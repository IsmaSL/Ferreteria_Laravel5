<!-- Mensaje -->
@if(session()->has('message'))
  <div class="alert alert-success" align="center">
    <strong>Agregaste un nuevo proveedor con éxito.</strong>
  </div>
@endif
<!-- Mensaje -->
@if(session()->has('delete'))
	<div class="alert alert-success" align="center">
	<strong>Haz eliminado un proveedor de tu lista.</strong>
	</div>
	@endif
	<!-- Mensaje -->
@if(session()->has('message_ok'))
  <div class="alert alert-success" align="center">
    <strong>Haz actualizado los datos de un proveedor de tu lista.</strong>
  </div>
@endif