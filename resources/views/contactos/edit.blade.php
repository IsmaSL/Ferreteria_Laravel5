
<!-- Central Modal Medium Warning -->
<div class="modal fade" id="modal-editar-{{$contacto->id_cliente}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form method="POST" action="{{ route('contactos.update', [$contacto->id_cliente]) }}">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}
      <div class="modal-dialog modal-notify modal-warning modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Header-->
        <div class="modal-header">
          <p class="heading lead"><strong>Editar cliente</strong></p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <i class="fas fa-edit fa-4x mb-3 animated rotateIn"></i>
            <p>Por favor, edite los campos necesarios acontinuación.</p>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label>Nombre(s):</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" value="{{ $contacto->nombre }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Paterno:</label>
              <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" value="{{ $contacto->apellido_paterno }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Materno:</label>
              <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" value="{{ $contacto->apellido_materno }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>RFC:</label>
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC"  value="{{ $contacto->rfc }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Teléfono:</label>
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{ $contacto->telefono }}" required>
            </div>
            <div class="col-md-4 mb-3">
          <label>Correo:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico:" value="{{ $contacto->email }}" required>
        </div>
            </div>
            <div class="form-row">
          <div class="col-md-12 mb-3">
            <label>Dirección:</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{ $contacto->direccion }}" required>
          </div>
        </div>
        <div>
           <small id="passwordHelpBlock" class="form-text text-muted">
              ID del cliente: {{ $contacto->id_cliente}}<br>
              Creado: {{ $contacto->created_at }}<br>
              Última actualizacion: {{ $contacto->updated_at}}
            </small>
        </div>
            <br>
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <button class="btn btn-warning" type="submit"><i class="fas fa-check fa-2x mr-3"></i>Editar!</button>
              <button class="btn btn-outline-warning waves-effect" data-dismiss="modal">Cancelar</a>
            </div>
          </form>
        </div>
        </div>
    <!--/.Content-->
    </div>
  </form>
</div>