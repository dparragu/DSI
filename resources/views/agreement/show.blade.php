  @extends('layouts.agreementtemplate')

@section('content')
  <div class="col-md-9 col-md-offset-0">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 id="titulo_index_agreement" >Modulo de Convenio Universidad de Macondo</h4>
      </div>
      <div class="panel-body">
      <table class="table table-condensed table-bordered"><h2>Convenio</h2>
        <thead>
          <tr>
            <th>  Codigo Convenio </th>
            <th>  Nombre Convenio   </th>
            <th>  Fecha Inicio   </th>
            <th>  Fecha Termino   </th>
            <th>  Tipo Convenio  </th>
            <th>  Descripción Convenio   </th>
            <th>  Acción  </th>

          </tr>
        </thead>
        <tbody>
        <!-- Referencia a los valores de la bd -->
          @foreach($agreements as $agreementtable)
          <tr>
            <td>{!! $agreementtable->id !!}</td>
            <td>{!! $agreementtable->nombre !!}</td>
            <td>{!! $agreementtable->fecha_inicio !!}</td>
            <td>{!! $agreementtable->fecha_termino !!}</td>
            <td>{!! $agreementtable->tipo !!}</td>
            <td>{!! $agreementtable->descripcion !!}</td>
            <td><a class="btn btn-default btn-sm" href="{!! $agreementtable->id !!}/edit" role="button"><span class="glyphicon glyphicon-pencil"></span></a> 
            <a class="btn btn-default btn-sm" href="{{route('agreement.destroy', $agreementtable->id)}}" role="button"><span class="glyphicon glyphicon-remove"></span></a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
          {!! $agreements->links() !!}
      </div>
      </div>
    </div>
  </div>
@endsection