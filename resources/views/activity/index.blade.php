@extends('layouts.agreementtemplate')

@section('content')
<div class="container">
    <div class="row">
    <div class="well well-lg"><h1>Mostrar Actividad</h1></div>
  </div>

      <div class="col-md-9">
      <table class="table table-condensed table-bordered"><h2>Actividad</h2>
        <thead>
          <tr>
            <th>  Codigo Actividad </th>
            <th>  Codigo Convenio </th>
            <th>  Nombre Actividad   </th>
            <th>  Descripción Actividad  </th>

          </tr>
        </thead>
        <tbody>
        <!-- Referencia a los valores de la bd -->
          @foreach($activities as $activitytable)
          <tr>
            <td>{!! $activitytable->id !!}</td>
            <td>{!! $activitytable->convenio !!}</td>
            <td>{!! $activitytable->nombre !!}</td>
            <td>{!! $activitytable->descripcion !!}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    
      </div>
@endsection