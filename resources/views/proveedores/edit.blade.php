<!-- Central Modal Medium Warning -->
<div class="modal fade" id="modal-editar-{{$proveedor->id_proveedor}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form method="POST" action="{{ route('proveedores.update', [$proveedor->id_proveedor]) }}">
      {{ method_field('PATCH') }}
      {{ csrf_field() }}
      <div class="modal-dialog modal-notify modal-warning modal-lg" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Header-->
        <div class="modal-header">
          <p class="heading lead"><strong>Editar proveedor</strong></p>

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
          {{ method_field('PATCH') }}
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-4 mb-3">
              <label>Nombre(s):</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" value="{{ $proveedor->nombre }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Paterno:</label>
              <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" value="{{ $proveedor->apellido_paterno }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Apellido Materno:</label>
              <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" value="{{ $proveedor->apellido_materno }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>RFC:</label>
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC"  value="{{ $proveedor->rfc }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Teléfono:</label>
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{ $proveedor->telefono }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Correo:</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico:" value="{{ $proveedor->email }}" required>
            </div>

            <div class="col-md-6 mb-3">
              <label>Dirección:</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{ $proveedor->direccion }}" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>Empresa:</label>
              <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="{{ $proveedor->empresa }}" required>
            </div>
            
        </div>
        <div>
           <small id="passwordHelpBlock" class="form-text text-muted">
              ID del cliente: {{ $proveedor->id_proveedor}}<br>
              Creado: {{ $proveedor->created_at }}<br>
              Última actualizacion: {{ $proveedor->updated_at}}
            </small>
        </div>
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