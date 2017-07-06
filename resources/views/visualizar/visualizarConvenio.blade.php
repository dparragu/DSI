@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="well well-lg"><h1>Mostrar Convenios</h1></div>
	</div>

			<div class="col-md-9">
			<table class="table table-condensed table-bordered"><h2>Convenios</h2>
				<thead>
					<tr>
						<th>	Codigo Convenio	</th>
						<th>	Nombre Convenio		</th>
						<th>  Convenio Vigente	</th>
						<th>	Vigencia Convenio</th>

					</tr>
				</thead>
				<tbody>
				<!-- Referencia a los valores de la bd -->
          @foreach($agreements as $agreementtable)
					<tr>
            <td>{!! $agreementtable->id!!}</td>
            <td>{!! $agreementtable->nombre!!}</td>
            <td>{!! $agreementtable->vigente!!}</td>
            <td>{!! $agreementtable->vigencia!!}</td>
            
					</tr>
          @endforeach
				</tbody>
			</table>
		
</div>
@endsection