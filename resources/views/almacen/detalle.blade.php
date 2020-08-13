<div class="modal fade" id="modal-detalle-{{$producto->id_producto}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading lead"><strong>Detalles del producto</strong></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
        <h4><strong>Información completa del producto:</strong></h4><br>
        <div class="row" align="left">
          <div class="col-md-6 mb-3">
            <label>Descripción:</label>
            <input type="text" readonly class="form-control-plaintext" name="descripcion" value="{{ $producto->descripcion }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Existencia:</label>
            <input type="text" readonly class="form-control-plaintext" name="existencia" value="{{ $producto->existencia }} &nbsp;pzs.">
          </div>
          <div class="col-md-3 mb-3">
            <label>Precio Compra U.:</label>
            <input type="text" readonly class="form-control-plaintext" name="precio_compra" value="$&nbsp;{{ $producto->precio_compra }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Precio Venta S/I:</label>
            <input type="text" readonly class="form-control-plaintext" name="precio_venta_si" value="$&nbsp;{{ $producto->precio_venta_si }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Impuesto:</label>
            <input type="text" readonly class="form-control-plaintext" name="impuesto" value="{{ $producto->impuesto }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Precio Venta C/I:</label>
            <input type="text" readonly class="form-control-plaintext" name="precio_venta_ci" value="$&nbsp;{{ $producto->precio_venta_ci }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Precio Final:</label>
            <input type="text" readonly class="form-control-plaintext" name="precio_final" value="$&nbsp;{{ $producto->precio_final }}">
          </div>
          <div class="col-md-4 mb-3">
            <label>Ganancia:</label>
            <input type="text" readonly class="form-control-plaintext" name="ganancia" value="$&nbsp;{{ $producto->ganancia }}">
          </div>
          <div class="col-md-4 mb-3">
            <label>Punto Reorden:</label>
            <input type="text" readonly class="form-control-plaintext" name="punto_reorden" value="{{ $producto->punto_reorden }} &nbsp;pzs.">
          </div>
          <div class="col-md-4 mb-3">
            <label>Proveedor (ID):</label>
            <input type="text" readonly class="form-control-plaintext" name="id_proveedor" value="{{ $producto->id_proveedor }}">
          </div>
        </div>
        <br>
        <h4><strong>Información básica el proveedor:</strong></h4><br>
        @if($producto->id_proveedor == 1)      
          <h5 align="center">
              <font style="color:#FF0000";>•</font>&nbsp;<strong>Este producto no cuenta con un proveedor.&nbsp;</strong><font style="color:#FF0000";>•</font>
          </h5>
        @else
          <div class="form-row" align="left"> 
              <div class="col-md-3 mb-3">
                <label>Nombre:</label>
                <input type="text" readonly class="form-control-plaintext" name="nombre" value="{{ $producto->nombre }}">
              </div>
              <div class="col-md-3 mb-3">
                <label>Apellido Paterno:</label>
                <input type="text" readonly class="form-control-plaintext" name="apellido_paterno" value="{{ $producto->apellido_paterno }}">
              </div>
              <div class="col-md-3 mb-3">
                <label>Apellido Materno:</label>
                <input type="text" readonly class="form-control-plaintext" name="apellido_materno" value="{{ $producto->apellido_materno}}">
              </div>
              <div class="col-md-3 mb-3">
                <label>Telefono:</label>
                <input type="text" readonly class="form-control-plaintext" name="apellido_materno" value="{{ $producto->telefono}}">
              </div>
          </div>
        @endif
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>