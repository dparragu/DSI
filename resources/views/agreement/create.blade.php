@extends('layouts.agreementtemplate')

@section('content')

<div class="col-md-9 col-md-offset-0">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 id="titulo_create_agreement" >Registro de Convenio</h4>
    </div>
    <div class="panel-body">
      <form role="form">
        <div class="form-group">
          <label for="tipo_convenio">Tipo de Convenio</label>
          <select name="Tipo de convenio">
            @foreach ($agreements as $agreement)
            <option>{{ $agreement->tipo }}</option>
            @endforeach
          </select>
          <label for="area">Area</label>
          <select name="area" id="area">
            @foreach ($areas as $area)
            <option>{{ $area->nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="nombre_convenio">Nombre Convenio</label>
          <input type="nombre_convenio" class="form-control"  placeholder="Ingrese Nombre del Convenio" id="nombre_convenio" />
        </div>
        <div class="form-group">
          <label for="descripcion_convenio">Descripcion</label>
          <textarea class="form-control" rows="3" placeholder="Ingrese una descripcion para Convenio" maxlength="500" cols="3"></textarea>
        </div>
      </form>

  </div>
</div>


@endsection
