@extends('layouts.agreementtemplate')

@section('content')
<div class="col-md-9 col-md-offset-0">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modificar Actividad</h2>
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

    {!! Form::model($activity, ['method' => 'PATCH','route' => ['activity.update', $activity->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Convenio:</strong>
                {!! Form::text('convenio', null, array('placeholder' => 'Tipo Convenio','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {!! Form::number('descripcion', null, array('placeholder' => 'Descripcion','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    </div>
    {!! Form::close() !!}
</div>

@endsection