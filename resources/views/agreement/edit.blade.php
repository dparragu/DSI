@extends('layouts.agreementtemplate')

@section('content')
<div class="col-md-9 col-md-offset-0">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar convenio</h2>
            </div>            
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡Error!</strong> Exiten uno o más errores en el formulario.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($agreement, ['method' => 'PATCH','route' => ['convenios.update', $agreement->id]]) !!}
    <div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
            </div>
        </div>
	
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {!! Form::number('estado', null, array('placeholder' => 'Estado','class' => 'form-control')) !!}
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fecha Inicio:</strong>
                {!! Form::date('fecha_inicio', null, array('placeholder' => 'Fecha','class' => 'form-control')) !!}
            </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fecha Decreto:</strong>
                {!! Form::date('fecha_decreto', null, array('placeholder' => 'Fecha','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
			<button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    </div>
    {!! Form::close() !!}
</div>

@endsection