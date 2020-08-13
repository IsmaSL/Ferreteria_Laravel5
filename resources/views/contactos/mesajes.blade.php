<!-- Mensaje -->
@if(session()->has('message'))
  <div class="alert alert-success" align="center">
    <strong>Agregaste un nuevo cliente con exito.</strong>
  </div>
@endif
<!-- Mensaje -->
@if(session()->has('delete'))
	<div class="alert alert-success" align="center">
	<strong>Haz eliminado un contacto a tu agenda.</strong>
	</div>
	@endif
	<!-- Mensaje -->
@if(session()->has('message_ok'))
  <div class="alert alert-success" align="center">
    <strong>Haz actualizado un contacto de tu agenda.</strong>
  </div>
@endif