<!-- Central Modal Medium Warning -->
<div class="modal fade" id="modal-editar-{{$producto->id_producto}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form method="POST" action="{{ route('almacen.update', [$producto->id_producto]) }}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}
    <div class="modal-dialog modal-notify modal-warning modal-lg" role="document">
    <!--Content-->
      <div class="modal-content">

      <!--Header-->
        <div class="modal-header">
          <p class="heading lead"><strong>Editar producto</strong></p>
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
            <div class="col-md-6 mb-3">
              <label>Descripción:</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{ $producto->descripcion }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Existencia:</label>
              <input type="text" class="form-control" id="existencia" name="existencia" placeholder="Existencia" value="{{ $producto->existencia }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Precio Compra U.:</label>
              <input type="text" class="form-control" id="precio_compra" name="precio_compra" placeholder="Precio Compra" value="{{ $producto->precio_compra }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Precio Venta S/I:</label>
              <input type="text" class="form-control" id="precio_venta_si" name="precio_venta_si" placeholder="Precio Venta S/I" value="{{ $producto->precio_venta_si }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Impuesto:</label>
              <input type="text" class="form-control" id="impuesto" name="impuesto" placeholder="Impuesto" value="{{ $producto->impuesto }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Precio Venta C/I:</label>
              <input type="text" class="form-control" id="precio_venta_ci" name="precio_venta_ci" placeholder="Precio Venta C/I" value="{{ $producto->precio_venta_ci }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label>Precio Final:</label>
              <input type="text" class="form-control" id="precio_final" name="precio_final" placeholder="Precio Final" value="{{ $producto->precio_final }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Ganancia:</label>
              <input type="text" class="form-control" id="ganancia" name="ganancia" placeholder="Ganancia a obtener" value="{{ $producto->ganancia }}" required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Punto Reorden:</label>
              <input type="text" class="form-control" id="punto_reorden" name="punto_reorden" placeholder="Punto de reorden" value="{{ $producto->punto_reorden }} " required>
            </div>
            <div class="col-md-4 mb-3">
              <label>Proveedor (ID):</label>
                  <select name="id_proveedor" id="id_proveedor" class="form-control" placeholder="Proveedor">
                    <option selected value="{{ $producto->id_proveedor }}">{{$producto->nombre}}&nbsp;{{ $producto->apellido_paterno }}&nbsp;{{ $producto->apellido_materno }}</option>
                    @foreach($proveedores as $proveedor)
                      <option value="{{$proveedor->id_proveedor}}">{{$proveedor->nombre}}&nbsp;{{ $proveedor->apellido_paterno }}&nbsp;{{ $proveedor->apellido_materno }}</option>
                    @endforeach
                  </select>
            </div>
          </div>
          <div>
            <small id="passwordHelpBlock" class="form-text text-muted">
              ID del producto: {{ $producto->id_producto}}<br>
              Creado: {{ $producto->created_at }}<br>
              Última actualizacion: {{ $producto->updated_at}}
            </small>
          </div>
        </div>
        <br>
        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button class="btn btn-warning" type="submit"><i class="fas fa-check fa-2x mr-3"></i>Editar!</button>
          <button class="btn btn-outline-warning waves-effect" data-dismiss="modal">Cancelar</a>
        </div>
      </div>
      <!-- CONTEND -->
    </div>
  </form>
</div>