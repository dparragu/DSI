<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agreement;
use App\Activity;
use App\Http\Requests;
use DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activity.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity = Activity::orderBy('id', 'asc');
        $agreements = Agreement::All();
        return view('activity.create', compact('activity', 'agreements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = Activity::create([
            'convenio'      => $request->convenio,
            'nombre'      => $request->get('nombre'),
            'descripcion'      => $request->get('descripcion'),
            ]);
        if($activity->save()){
            session()->flash('flash_message', 'Actividad Guardada');
            return redirect('activity');
        }
        else{
            session()->flash('flash_message', 'La Actividad  no se guardo');
            return redirect('activity/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $activities = Activity::All();
        $activities = Activity::orderBy('nombre', 'asc')->paginate(5);
         return view('activity.show',compact('activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activity.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //sin validación por ahora
         $this->validate($request, [
             'convenio' => 'required',
             //'description' => 'required',
         ]);

        Activity::find($id)->update($request->all());
        return redirect()->route('activity.index')
                        ->with('success','Convenio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
