<!-- Mensaje -->
@if(session()->has('message'))
  <div class="alert alert-success" align="center">
    <strong>Agregaste un nuevo producto con exito.</strong>
  </div>
@endif
<!-- Mensaje -->
@if(session()->has('delete'))
	<div class="alert alert-success" align="center">
	<strong>Haz eliminado un producto a tu lista.</strong>
	</div>
	@endif
	<!-- Mensaje -->
@if(session()->has('message_ok'))
  <div class="alert alert-success" align="center">
    <strong>Haz actualizado un producto a tu lista.</strong>
  </div>
@endif