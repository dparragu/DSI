@extends('layouts.agreementtemplate')

@section('content')

<div class="col-md-9 col-md-offset-0">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 id="titulo_create_agreement" >Modificación de Actividad</h4>
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
            {!! Form::model($activity, ['method' => 'PATCH','route' => ['activity.update', $activity->id]]) !!}
              <div class="form-group">
                <label for="convenio">Convenio</label>
                <select name="convenio" >
                @foreach ($agreements as $agreement)
                  <option value="{!! $agreement->id !!}">{!! $agreement->nombre !!}</option>
                @endforeach
                </select>
              </div>
 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('nombre', null, array('placeholder' => 'Nombre Actividad','class' => 'form-control')) !!}
                    </div>
                </div>
 
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descripción:</strong>
                        {!! Form::text('descripcion', null, array('placeholder' => 'Descripción Actividad','class' => 'form-control')) !!}
                    </div>
                </div>
      
              <div class="form-group">
                {!! Form::submit('Actualizar', ["class" => "btn btn-success btn-block"]) !!}
              </div>
 
          {!! Form::close() !!}
        </div>

  </div>
</div>


@endsection