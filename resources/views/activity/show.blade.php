@extends('layouts.agreementtemplate')

@section('content')
  <div class="col-md-9 col-md-offset-0">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 id="titulo_index_agreement" >Modulo de Actividad Universidad de Macondo</h4>
      </div>
      <div class="panel-body">
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
    </div>
  </div>
@endsection