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
            {!! Form::open(['route' => 'activity.store']) !!}
              <div class="form-group">
                <label for="tipo_convenio">Tipo de Convenio</label>
                <select name="Tipo de convenio">
                @foreach ($agreements as $agreement)
                  <option>{{ $agreement->tipo }}</option>
                @endforeach
                </select>
          
              </div>
 
              <div class="form-group">
                {!! Form::text('nombre', null,
                    ['class'=>'form-control', 'placeholder'=>'Nombre Actividad'])
                !!}
              </div>

              <div class="form-group">
                {!! Form::text('descripcion', null,
                    ['class'=>'form-control', 'placeholder'=>'Descripcion Actividad', 'maxlength'=>'500'])
                !!}
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