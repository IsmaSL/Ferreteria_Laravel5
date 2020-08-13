<button class="btn btn-success" data-toggle="modal" data-target="#centralModalSuccess" type="submit">
        <i class="fas fa-box-open mr-3 fa-lg"></i>Añadir producto</a>
</button>
      <!-- Central Modal Medium Success -->
      <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-success" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead"><strong>Nuevo producto</strong></p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body" align="left">
              <div class="text-center">
                <i class="fas fa-box-open fa-4x mb-3 animated rotateIn"></i>
                <p>Por favor, rellene los campos solicitados acontinuación.</p>
              </div>
              <br>
              <form method="POST" action="{{ route('almacen.store') }}">
                {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>Descripción:</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Existencia:</label>
                  <input type="text" class="form-control" id="existencia" name="existencia" placeholder="Existencia">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Precio Compra U.:</label>
                  <input type="text" class="form-control" id="precio_compra" name="precio_compra" placeholder="Precio de Compra U.">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Precio Venta S/I:</label>
                  <input type="text" class="form-control" id="precio_venta_si" name="precio_venta_si" placeholder="Precio Venta S/I">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Impuesto:</label>
                  <input type="text" class="form-control" id="impuesto" name="impuesto" placeholder="Impuesto">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Precio Venta C/I:</label>
                  <input type="text" class="form-control" id="precio_venta_ci" name="precio_venta_ci" placeholder="Precio Venta C/I">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Precio Final:</label>
                  <input type="text" class="form-control" id="precio_final" name="precio_final" placeholder="Precio Final">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Ganancia:</label>
                  <input type="text" class="form-control" id="ganancia" name="ganancia" placeholder="¿De cuánto es la ganancia?">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Punto Reorden:</label>
                  <input type="text" class="form-control" id="punto_reorden" name="punto_reorden" placeholder="Punto Reorden">
                </div>
                <div class="col-md-4 mb-3">
                  <label>Proveedor:</label>
                  <select name="id_proveedor" id="id_proveedor" class="form-control">
                    <option selected>Seleccionar un proveedor...</option>
                    @foreach($proveedores as $proveedor)
                      <option value="{{$proveedor->id_proveedor}}">{{$proveedor->nombre}}&nbsp;{{ $proveedor->apellido_paterno }}&nbsp;{{ $proveedor->apellido_materno }}</option>
                    @endforeach
                  </select>
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