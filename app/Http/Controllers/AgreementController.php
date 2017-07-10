<?php
// Controlador para modulo de convenios

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agreement;
use App\Area;
use App\Http\Requests;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agreement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agreements = Agreement::All();
        return view('agreement.create', compact('agreements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agreement = Agreement::create([
            'estado'      => $request->get('estado'),
            'nombre'      => $request->get('nombre'),
            'fecha_inicio'      => $request->get('fecha_inicio'),
            'fecha_termino'      => $request->get('fecha_termino'),
            'fecha_firma'      => $request->get('fecha_firma'),
            'fecha_decreto'      => $request->get('fecha_decreto'),
            'decreto'      => $request->get('decreto'),
            'vigente'      => $request->get('vigente'),
            'vigencia'      => $request->get('vigencia'),
            'tipo'      => $request->get('tipo'),
            'descripcion'      => $request->get('descripcion'),
            ]);
        if($agreement->save()){
            session()->flash('flash_message', 'Convenio guardado');
            return redirect('agreement');
        }
        else{
            session()->flash('flash_message', 'El Convenio no se guardo');
            return redirect('agreement/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agreements = Agreement::All();
        $agreements = Agreement::orderBy('id', 'asc')->paginate(5);
         return view('agreement.show',compact('agreements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agreement = Agreement::find($id);
		return view('agreement.edit',compact('agreement'));
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
             'estado' => 'required',
             'nombre'   => 'required',
             'fecha_inicio' => 'required',
             'fecha_termino' => 'required',
             'fecha_firma' => 'required',
             'fecha_decreto' => 'required',
             'decreto' => 'required',
             'vigente' => 'required',
             'vigencia' => 'required',
             'tipo' => 'required',
             'descripcion' => 'required',
         ]);

        if(Agreement::find($id)->update($request->all())){
            session()->flash('flash_message', 'Convenio actualizado');
            return redirect('agreement/show');
        }
        else{
            session()->flash('flash_message', 'El Convenio no se actualizó');
            return redirect('agreement/show');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agreements = Agreement::find($id);        
        if($agreements->delete())
        {
            session()->flash('flash_message', 'Convenio eliminado');
            return redirect('agreement/show');    
        }
        else{
            session()->flash('flash_message', 'El Convenio no se eliminó');
            return redirect('agreement/show');
        }
    }
}
