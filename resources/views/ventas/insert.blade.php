 <!-- Central Modal Medium Success -->
      <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notify modal-xl  modal-success" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead"><strong>Nuevo Movimiento<i class="fas fa-file fa-lg ml-2 animated rotateIn"></i></strong></p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
            <!--Body-->
            <div class="modal-body" align="left">
              <form method="POST" autocomplete="off" action="{{ route('ventas.store') }}">
                {{ csrf_field() }}

              <div class="row">
                <div class="col-md-4 mb-3">
                  <label>Tipo de movimiento:</label>
                  <select name="tipo_venta" id="tipo_venta" class="form-control selectpicker" data-live-search="false" data-style="btn btn-outline-success">
                    <option selected>Sleccione tipo...</option>
                      <option value="Venta">Venta</option>
                      <option value="Pedido">Pedido</option>
                      <option value="Cotizacion">Cotización</option>
                  </select>
                </div>
                <div class="col-md-8 mb-3">
                  <label for="cliente">Cliente:</label>
                  <select name="id_cliente" id="id_cliente" class="form-control selectpicker" data-live-search="true" data-style="btn btn-outline-success" >
                    <option selected>Seleccionar un cliente...</option>
                    @foreach($clientes as $cliente)
                      <option value="{{$cliente->id_cliente}}">{{$cliente->nombre}}&nbsp;{{ $cliente->apellido_paterno }}&nbsp;{{ $cliente->apellido_materno }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-8 mb-3">
                  <label>Producto:</label>
                  <select name="id_producto" id="id_producto" class="form-control" data-live-search="true" onclick="mostrarValores()">
                    <option selected>Seleccionar un producto...</option>
                    @foreach($productos as $producto)
                      <option value="{{$producto->id_producto}}_{{$producto->existencia}}_{{$producto->precio_final}}">{{$producto->descripcion}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3 mb-3">
                  <label>Almacén:</label>
                  <input type="number" disabled readonly class="form-control-plaintext" id="existencia" name="existencia" placeholder="En existencia" value="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label>Cantidad</label>
                  <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Precio Unitario:</label>
                  <input type="text" disabled readonly class="form-control-plaintext" id="precio_final" name="precio_final" placeholder="Precio Unitario" value="$">
                </div>
                <div class="col-md-3 mb-3">
                  <label>Descuento:</label>
                  <select name="descuento" id="descuento" class="form-control">
                    <option selected value="0">S/D</option>
                      <option value="3">3% Desc</option>
                      <option value="5">5% Desc</option>
                      <option value="8">8% Desc</option>
                  </select>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="form-group">
                    <br>
                   <button type="button" id="bt_add" class="btn btn-secondary"><i class="fas fa-cart-plus fa-lg mr-2"></i>Añadir</button> 
                  </div>
                </div>
                <div  class="table-responsive table-striped w-auto col-md-12 mb-3">
                  <table id="detalles" class="table table-hover table-light">
                    <thead class="thead-dark">
                      <th>Opc.</th>
                      <th>Descripción</th>
                      <th>Cantidad</th>
                      <th>Precio Unitario</th>
                      <th>% Descuento</th>
                      <th>Subtotal</th>
                    </thead>
                    <tfoot>
                      <th>Total:</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th><h4 id="total">$ 0.00</h4><input type="hidden" name="total_venta" id="total_venta"></th>
                    </tfoot>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
               <!--Footer-->
              <div class="modal-footer justify-content-center" id="guardar">
                <input type="hidden" name="estado" id="estado" value="Activa">
                <button class="btn btn-success" type="submit" align="center"><i class="fas fa-check fa-2x mr-2"></i>Listo!</button>
                <button class="btn btn-outline-success waves-effect" data-dismiss="modal">Cancelar</button>
              </div>
            </form>
            @push ('scripts')
              <script>
                $(document).ready(function(){
                  $('#bt_add').click(function(){
                    agregar();
                  });
                });

                var cont = 0;
                total = 0;
                pre_des = 0;
                sub_total=[];

                $("#guardar").hide();

                $("#id_producto").change(mostrarValores);

                function mostrarValores(){
                  datosProducto = document.getElementById('id_producto').value.split('_');
                  $("#precio_final").val(datosProducto[2]);
                  $("#existencia").val(datosProducto[1]);
                }

                function agregar(){
                  
                  datosProducto = document.getElementById('id_producto').value.split('_');

                  id_producto = datosProducto[0];
                  stock = $("#existencia").val();
                  descripcion = $("#id_producto option:selected").text();
                  cantidad = $("#cantidad").val();
                  precio_unitario = $("#precio_final").val();
                  descuento = $("#descuento option:selected").val();

                  if (id_producto!="" && cantidad!="" && cantidad>=1 && precio_unitario!="" && descuento!="" && descripcion!="Seleccionar un producto..."){

                    if (cantidad<=stock) {

                      if (descuento=="3") {
                        pre_des = precio_unitario - (precio_unitario * 0.03);
                        sub_total[cont] = (cantidad * pre_des);
                      }
                      if (descuento=="5") {
                        pre_des = precio_unitario - (precio_unitario * 0.05);
                        sub_total[cont] = (cantidad * pre_des);
                      }
                      if (descuento=="8") {
                        pre_des = precio_unitario - (precio_unitario * 0.08);
                        sub_total[cont] = (cantidad * pre_des);
                      }
                      if (descuento=="0") {
                        pre_des = precio_unitario - (precio_unitario * 0);
                        sub_total[cont] = (cantidad * pre_des);
                      }
                      
                      total = total+sub_total[cont];

                      var fila='<tr class="selected" id="fila'+cont+'"><td><a onclick="eliminar('+cont+');"><input type="hidden" name="id_producto[]" value="'+id_producto+'"><i class="far fa-times-circle red-text fa-2x"></i></a></td><td><input type="text" readonly class="form-control-plaintext" name="descripcion[]" value="'+descripcion+'"></td><td><input type="number" readonly class="form-control-plaintext" name="cantidad[]" value="'+cantidad+'"></td><td><input type="text" readonly class="form-control-plaintext" name="precio_unitario[]" value="'+precio_unitario+'"></td><td><input type="number" readonly class="form-control-plaintext" name="descuento[]" value="'+descuento+'"></td><td><input type="number" readonly class="form-control-plaintext" name="subtotal[]" value="'+sub_total[cont]+'"></td></tr>';

                      cont++;
                      limpiar(); 
                      $("#total").html("$ "+total);
                      $("#total_venta").val(total);
                      evaluar();
                      $('#detalles').append(fila);

                    }else{
                      alert("Sobrepasa las cantidades existentes.")
                    }
                    
                  }else{
                    alert("Error al ingresar articulo, verifique los datos.")
                  }
                }

                function limpiar(){
                  $("#cantidad").val("");
                  $("#precio_final").val("");
                  $("#descuento").val("");
                  $("#existencia").val("");
                  $("#id_producto").val("");
                }

                function evaluar(){
                  if(total>0){
                    $("#guardar").show();
                  }else{
                    $("#guardar").hide();
                  }
                }

                function eliminar(index){
                  total=total-sub_total[index];
                  $("#total").html("S/. "+total);
                  $("#total_venta").val(total);
                  $("#fila"+index).remove();
                  evaluar();
                }
              </script>
            @endpush
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>