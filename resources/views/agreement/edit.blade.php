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

    @if($errors->has())
            <div class='alert alert-danger'>
                 @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif
 
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

    {!! Form::model($agreement, ['method' => 'PATCH','route' => ['agreement.update', $agreement->id]]) !!}
    <div class="row">

		<div class="form-group">
                <label for="estado">Estado Convenio</label>
                {!! Form::select('estado', ['0' => 'Activo', '1' => 'Terminado'], $agreement->estado, ['placeholder' => 'Selecciona una opción...']) !!}
              </div>
 
              <div class="form-group">
                <label for="nombre">
                    Nombre Convenio
                </label>
                {!! Form::text('nombre', null, array('placeholder' => 'Nombre Convenio','class' => 'form-control')) !!}
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="fecha_inicio">
                    Fecha Inicio
                </label>
                {!! Form::date('fecha_inicio', $agreement->fecha_inicio) !!}
                </div>
                
                <div class="col-md-3">
                  <label for="fecha_termino">
                    Fecha Termino
                </label>
                {!! Form::date('fecha_termino', $agreement->fecha_termino) !!}
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="fecha_firma">
                    Fecha Firma
                </label>
                {!! Form::date('fecha_firma', $agreement->fecha_firma) !!}
                </div>
                
                <div class="col-md-3">
                  <label for="fecha_decreto">
                    Fecha Decreto
                </label>
                {!! Form::date('fecha_decreto', $agreement->fecha_decreto) !!}
                </div>

                <div class="col-md-3">
                <label for="decreto">Estado Decreto</label>
                  {!! Form::select('decreto', ['0' => 'Firmado', '1' => 'No Firmado'], $agreement->decreto, ['placeholder' => 'Selecciona una opción...']) !!}
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="vigente">Vigente</label>
                  {!! Form::select('vigente', ['0' => 'Si', '1' => 'No'], $agreement->vigente, ['placeholder' => 'Selecciona una opción...']) !!}
                </div>

                <div class="col-md-3">
                <label for="vigencia">Vigencia</label>
                  <div>
                    {!! Form::selectRange('vigencia', 1, 12) !!}
                  </div> 
                </div>
              </div>
              
              <div class="form-group">
                <label for="tipo">
                    Tipo
                </label>
                {!! Form::text('tipo', $agreement->tipo, array('placeholder' => 'Ingrese tipo de convenio','class' => 'form-control')) !!}
              </div>

              <div class="form-group">
                <label for="descripcion">
                    Descripción Convenio
                </label>
                {!! Form::textarea('descripcion', $agreement->descripcion, array('placeholder' => 'Ingrese una descripción al convenio','class' => 'form-control')) !!}
              </div>

            <div class="form-group">
                {!! Form::submit('Actualizar', ["class" => "btn btn-primary btn-block"]) !!}
              </div>

    </div>
    {!! Form::close() !!}
</div>

@endsection