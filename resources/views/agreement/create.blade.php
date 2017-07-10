@extends('layouts.agreementtemplate')

@section('content')

<div class="col-md-9 col-md-offset-0">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 id="titulo_create_agreement" >Registro de Convenios</h4>
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
        {!! Form::model($agreements, ['method' => 'POST','route' => 'agreement.store']) !!}
              

              <div class="form-group">
                <label for="estado">Estado Convenio</label>
                {!! Form::select('estado', ['0' => 'Activo', '1' => 'Terminado'], null, ['placeholder' => 'Selecciona una opción...']) !!}
              </div>
 
              <div class="form-group">
                <label for="nombre">
                    Nombre Convenio
                </label>
                <input type="text" class="form-control" name="nombre" required placeholder="Ingrese un nombre">
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="fecha_inicio">
                    Fecha Inicio
                </label>
                <input type="date" class="form-control" name="fecha_inicio" required>
                </div>
                
                <div class="col-md-3">
                  <label for="fecha_termino">
                    Fecha Termino
                </label>
                <input type="date" class="form-control" name="fecha_termino" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="fecha_firma">
                    Fecha Firma
                </label>
                <input type="date" class="form-control" name="fecha_firma" required>
                </div>
                
                <div class="col-md-3">
                  <label for="fecha_decreto">
                    Fecha Decreto
                </label>
                <input type="date" class="form-control" name="fecha_decreto" required>
                </div>

                <div class="col-md-3">
                <label for="decreto">Estado Decreto</label>
                  {!! Form::select('decreto', ['0' => 'Firmado', '1' => 'No Firmado'], null, ['placeholder' => 'Selecciona una opción...']) !!}
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-3">
                  <label for="vigente">Vigente</label>
                  {!! Form::select('vigente', ['0' => 'Si', '1' => 'No'], null, ['placeholder' => 'Selecciona una opción...']) !!}
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
                <input class="form-control" rows="4" name="tipo" required placeholder="Ingrese un tipo"></textarea>
              </div>

              <div class="form-group">
                <label for="descripcion">
                    Descripción Convenio
                </label>
                <textarea class="form-control" rows="4" name="descripcion" required placeholder="Ingrese una Descripción"></textarea>
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
