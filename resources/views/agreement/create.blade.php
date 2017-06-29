<!-- Menú para la vista de Agreements -->
<div class="row">
  <div class="col-md-3">
    <div class="list-group">
      <!-- list-group para menú de gestion de convenios -->
      <a href="#" class="list-group-item active">Gestión de Convenios</a>
      <div class="list-group-item">
        <ul class="">
          <li><a href="{{url('/agreement/create')}}">Registrar Convenios</a></li>
          <li><a href="/agreement/">Modificar Convenios</a></li>
          <li><a href="/agreement/vizualizarConvenio">Eliminar Convenios</a></li>
        </ul>
      </div>
      <div class="list-group-item">
        <a href="{{url('/agreement/')}}">Asociar Instituciones por Convenio</a>
			</div>
      <div class="list-group-item">
        <ul class="">
          <li><a href="{{url('/agreement/')}}">Consultar Convenios</a></li>
          <li><a href="/agreement/">Consultar Coordinadores</a></li>
        </ul>
			</div>
<!-- Fin vista Menú de Agreements -->
