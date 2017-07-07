@extends('layouts.agreementtemplate')

@section('content')

<div class="col-md-9 col-md-offset-0">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 id="titulo_create_agreement" >Registro de Actividad</h4>
    </div>
    <div class="panel-body">
 
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
 
        <div class="panel-body">
            {!! Form::open(array('route' => 'activity.store', 'method' => 'POST')) !!}
              <div class="form-group">
                <label for="convenio">Convenio</label>
                <select name="convenio" >
                @foreach ($agreements as $agreement)
                  <option value="{!! $agreement->id !!}">{!! $agreement->nombre !!}</option>
                @endforeach
                </select>
              </div>
 
              <div class="form-group">
                <label for="nombre">
                    Nombre Actividad
                </label>
                <input type="text" class="form-control" name="nombre" required placeholder="Ingrese un nombre">
              </div>
 
              <div class="form-group">
                <label for="descripcion">
                    Descripción Actividad
                </label>
                <input type="text" class="form-control" name="descripcion" required placeholder="Ingrese una Descripción">
              </div>
      
              <div class="form-group">
                {!! Form::submit('Guardar', ["class" => "btn btn-success btn-block"]) !!}
              </div>

              <div class="form-group">
                {!! Form::reset('Limpiar', ["class" => "btn  btn-warning btn-reset btn-block"]) !!}
              </div>
 
          {!! Form::close() !!}
        </div>

  </div>
</div>


@endsection