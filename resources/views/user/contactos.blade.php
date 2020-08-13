@extends('plantilla')
@section('content')
<!--<div class="container-expand-lg ml-3 mr-3">-->
	<div class="container">
		<br>
		<h2 class="font-weight-light" align="center">Lista de clientes</h2>
		<br>
		<div class="container" align="center">
			<!-- Aquí va una referencia hacia el formulario de Insertar-->
			@include('contactos/insert')
		</div>
		<br>
		<!-- Errores -->
		@include('contactos/mesajes')
	</div>
	<div class="table-responsive table-striped w-auto ml-5 mr-5">
		@if($contactos->isEmpty())
			<h3 align="center">No hay contactos para mostrar.</h3>
		@else
			<table class="table table-hover table-light">
			  	<thead class="thead-dark">
				    <tr align="center">
				      <th scope="col">ID</th>
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
					@foreach($contactos as $contacto)
						<tr align="center">
							<td><strong>{{ $contacto->id_cliente }}</strong></td>
						    <td>{{ $contacto->nombre }}</td>
						    <td>{{ $contacto->apellido_paterno }}</td>
						    <td>{{ $contacto->apellido_materno }}</td>
						    <td>{{ $contacto->rfc }}</td>
						    <td>{{ $contacto->direccion }}</td>
						    <td>{{ $contacto->telefono }}</td>
						    <td>{{ $contacto->email }}</td>
						    <td>
						    	<a href="" data-target="#modal-editar-{{$contacto->id_cliente}}" data-toggle="modal" >
								  <i class="fas fa-edit amber-text fa-2x"></i>
								</a>
						    	<!--
						    	<a class="btn-floating" href="{{ route('contactos.edit', [$contacto->id_cliente]) }}">
								    <i class="fas fa-edit amber-text fa-2x"></i>
								</a>
								-->
						    </td>
						    <td>
								<a href="" data-target="#modal-delete-{{$contacto->id_cliente}}" data-toggle="modal">
									<i class="far fa-trash-alt red-text fa-2x"></i>
								</a>
						    </td>
						</tr>
						@include('contactos/edit')
						@include('contactos/delete')
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
	<br>
	<nav aria-label="Page navigation example">
	  <ul class="pagination pagination-md pagination-circle pg-blue justify-content-center">
	    <li class="page-item">{{ $contactos->render() }}</li>
	  </ul>
	</nav>
	<br>
@endsection
