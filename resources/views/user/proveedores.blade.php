@extends('plantilla')
@section('content')
<!--<div class="container-expand-lg ml-3 mr-3">-->
	<div class="container">
		<br>
		<h2 class="font-weight-light" align="center">Lista de proveedores</h2>
		<br>
		<div class="container" align="center">
			<!-- Aquí va una referencia hacia el formulario de Insertar-->
			@include('proveedores/insert')
		</div>
		<br>
		<!-- Errores -->
		@include('proveedores/mesajes')
	</div>
	<div class="table-responsive table-striped w-auto ml-5 mr-5">
		@if($proveedores->isEmpty())
			<h3 align="center">No hay proveedores para mostrar.</h3>
		@else
			<table class="table table-hover table-light">
			  	<thead class="thead-dark">
				    <tr align="center">
				      <th scope="col">ID</th>
				      <th scope="col">Empresa</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Ap. Paterno</th>
				      <th scope="col">Ap. Materno</th>
				      <th scope="col">RFC</th>
				      <th scope="col">Direccion</th>
				      <th scope="col">Teléfono</th>
				      <th scope="col">Email</th>
				      <th scope="col">Editar</th>
				      <th scope="col">Borrar</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($proveedores as $proveedor)
						<tr align="center">
							<td><strong>{{ $proveedor->id_proveedor }}</strong></td>
							<td>{{ $proveedor->empresa }}</td>
						    <td>{{ $proveedor->nombre }}</td>
						    <td>{{ $proveedor->apellido_paterno }}</td>
						    <td>{{ $proveedor->apellido_materno }}</td>
						    <td>{{ $proveedor->rfc }}</td>
						    <td>{{ $proveedor->direccion }}</td>
						    <td>{{ $proveedor->telefono }}</td>
						    <td>{{ $proveedor->email }}</td>
						    <td>
								<a href="" data-target="#modal-editar-{{$proveedor->id_proveedor}}" data-toggle="modal" >
								  <i class="fas fa-edit amber-text fa-2x"></i>
								</a>
						    </td>
						    <td>
								<a href="" data-target="#modal-delete-{{$proveedor->id_proveedor}}" data-toggle="modal">
									<i class="far fa-trash-alt red-text fa-2x"></i>
								</a>
						    </td>
						</tr>
						@include('proveedores/edit')
						@include('proveedores/delete')
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
	<br>
	<nav aria-label="Page navigation example">
	  <ul class="pagination pagination-md pagination-circle pg-blue justify-content-center">
	    <li class="page-item">{{ $proveedores->render() }}</li>
	  </ul>
	</nav>
	<br>
@endsection
