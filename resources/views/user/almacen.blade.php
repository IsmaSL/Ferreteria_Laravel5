@extends('plantilla')
@section('content')
<!--<div class="container-expand-lg ml-3 mr-3">-->
	<div class="container">
		<br>
		<h2 class="font-weight-light" align="center">Lista de productos</h2>
		<br>
		<div class="container" align="center">
			<!-- Aquí va una referencia hacia el formulario de Insertar-->
			@include('almacen/insert')
		</div>
		<br>
		<!-- Errores -->
		@include('almacen/mesajes')
	</div>
	{{ csrf_field() }}
	<div class="table-responsive table-striped w-auto ml-5 mr-5">
		@if($productos->isEmpty())
			<h3 align="center">No hay productos para mostrar.</h3>
		@else
			<table class="table table-hover table-light">
			  	<thead class="thead-dark">
				    <tr align="center">
				      <th scope="col">ID</th>
				      <th scope="col">Descripción</th>
				      <th scope="col">Existencia</th>
				      <th scope="col">$ Venta S/I</th>
				      <th scope="col">$ Venta C/I</th>
				      <th scope="col">$ Final</th>
				      <th scope="col">+ Detalles</th>
				      <th scope="col">Editar</th>
				      <th scope="col">Borrar</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr align="center">
							<td><strong>{{ $producto->id_producto }}</strong></td>
							<td align="left">{{ $producto->descripcion }}</td>
						    <td>{{ $producto->existencia }}</td>
						    <td>$&nbsp;{{ $producto->precio_venta_si }}</td>
						    <td>$&nbsp;{{ $producto->precio_venta_ci }}</td>
						    <td>$&nbsp;{{ $producto->precio_final }}</td>
						    <td>
						    	<a data-target="#modal-detalle-{{$producto->id_producto}}" data-toggle="modal">
								    <i class="fas fa-list-alt cyan-text fa-2x"></i>
								</a>
						    </td>
						    <td>
								<a data-target="#modal-editar-{{$producto->id_producto}}" data-toggle="modal">
								    <i class="fas fa-edit amber-text fa-2x"></i>
								</a>
								@include('almacen/edit')
						    </td>
						    <td>
								<a data-target="#modal-delete-{{$producto->id_producto}}" data-toggle="modal">
									<i class="far fa-trash-alt red-text fa-2x"></i>
								</a>
								@include('almacen/delete')
						    </td>
						</tr>
						@include('almacen/detalle')
						
						
					@endforeach
				</tbody>
			</table>
			<div>
	           <small id="passwordHelpBlock" class="form-text text-muted">
	              $ = Precio&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;S/I = Sin Impuesto&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;C/I = Con Impuesto
	            </small>
	        </div>
		@endif
	</div>
	<br>
	<nav aria-label="Page navigation example">
	  <ul class="pagination pagination-md pagination-circle pg-blue justify-content-center">
	    <li class="page-item">{{ $productos->render() }}</li>
	  </ul>
	</nav>
	<br>
@endsection