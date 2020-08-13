@extends('plantilla')
@section('content')
  <div class="modal-dialog modal-notify modal-info modal-xl" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading lead"><strong>Información completa de la venta con el Folio: {{$venta->id_venta}}</strong></p>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="row" align="left">
          <div class="col-md-2 mb-2">
            <label>Folio:</label>
            <input type="text" readonly class="form-control-plaintext" name="id_venta" value="{{$venta->id_venta}}">
          </div>
          <div class="col-md-2 mb-3">
            <label>Tipo de venta:</label>
            <input type="text" readonly class="form-control-plaintext" name="tipo_venta" value="{{$venta->tipo_venta}}">
          </div>
          <div class="col-md-3 mb-3">
            <label>Fecha:</label>
            <input type="text" readonly class="form-control-plaintext" name="created_at" value="{{$venta->created_at}}">
          </div>
          <div class="col-md-5 mb-3">
            <label>Cliente:</label>
            <input type="text" readonly class="form-control-plaintext" name="id_cliente" value="{{$venta->nombre}}&nbsp;{{ $venta->apellido_paterno }}&nbsp;{{ $venta->apellido_materno }}">
          </div>
          <div class="col-md-3 mb-3">
            <label>RFC:</label>
            <input type="text" readonly class="form-control-plaintext" name="rfc" value="{{$venta->rfc}}">
          </div>
          <div class="col-md-5 mb-2">
            <label>Dirección</label>
            <input type="text" readonly class="form-control-plaintext" name="direccion" value="{{$venta->direccion}}">
          </div>
          <div class="col-md-2 mb-2">
            <label>Telefono</label>
            <input type="text" readonly class="form-control-plaintext" name="telefono" value="{{$venta->telefono}}">
          </div>
        </div>
        <div class="row">
          <div  class="table-responsive table-striped w-auto col-md-12 mb-3">
            <table id="detalles" class="table table-hover table-light">
              <thead class="thead-dark">
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Precio Unitario</th>
                <th>% Descuento</th>
                <th>Subtotal</th>
              </thead>

              <tbody>
                @foreach($detalles as $detalle)
                  <tr>
                    <td>{{$detalle->cantidad}}</td>
                    <td>{{$detalle->descripcion}}</td>
                    <td>{{$detalle->precio_venta_uni}}</td>
                    <td>{{$detalle->descuento}}</td>
                    <td>{{$detalle->subtotal}}</td>
                  </tr>
                @endforeach
              </tbody>

              <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th><h5 align="right">Total:</h5></th>
                <th><h5 align="right">${{$venta->total_venta}}</h5></th>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer justify-content-center" id="guardar">
        <input type="hidden" name="estado" id="estado" value="Activa">
        <button type="button" class="btn btn-primary" align="center">Descargar</button>
        <button type="button" class="btn btn-secondary">Imprimir</button>
      </div>
      <!--Fin header-->
    </div>
  </div>
  @endsection