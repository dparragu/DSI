@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					Lista de controladores y sus vistas
				</div>
				<ul class="list-group">
					<li class="list-group-item"><a href="#">Home</a></li>
					<li class="list-group-item"><a href="institution">Institucion</a></li>
					<li class="list-group-item"><a href="activity">Actividad</a></li>
					<li class="list-group-item"><a href="agreement">Convenios</a></li>
					<li class="list-group-item"><a href="area">Area</a></li>
					<li class="list-group-item"><a href="objetive">Objetivos</a></li>
				</ul>                
            </div>
        </div>
    </div>
</div>
@endsection
