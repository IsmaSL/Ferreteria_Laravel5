<button class="btn btn-success" data-toggle="modal" data-target="#centralModalSuccess" type="submit">
        <i class="fas fa-user-plus mr-3 fa-lg"></i>Añadir proveedor</a>
</button>
      <!-- Central Modal Medium Success -->
      <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-success" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead"><strong>Nuevo proveedor</strong></p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body">
              <div class="text-center">
                <i class="fas fa-user-plus fa-4x mb-3 animated rotateIn"></i>
                <p>Por favor, rellene los campos solicitados acontinuación.</p>
              </div>
              <br>
              <form method="POST" action="{{ route('proveedores.store') }}">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label>Nombre(s):</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Apellido Paterno:</label>
                  <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Apellido Materno:</label>
                  <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno">
                </div>
                <div class="col-md-4 mb-3">
                  <label>RFC:</label>
                  <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Teléfono:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Correo:</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico:">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label>Dirección:</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                </div>
                <div class="col-md-6 mb-3">
                  <label>Empresa:</label>
                  <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa en la que trabaja">
                </div>
              </div>
              <br>
               <!--Footer-->
              <div class="modal-footer justify-content-center">
                <button class="btn btn-success" type="submit" align="center"><i class="fas fa-check fa-2x mr-2"></i>Listo!</button>
                <button class="btn btn-outline-success waves-effect" data-dismiss="modal">Cancelar</button>
              </div>
            </form>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>