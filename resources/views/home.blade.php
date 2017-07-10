@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menú</div>
                 <div class="container row">
                    <div class="panel panel-default col-md-3">
                        <ul class="list-group">
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
    </div>
</div>
@endsection
