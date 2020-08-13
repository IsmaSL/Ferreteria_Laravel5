@extends('plantilla')
@section('content')
<!--<div class="container-expand-lg ml-3 mr-3">-->
	<div class="container">
		<br>
		<h2 class="font-weight-light" align="center">Lista de movimientos</h2>
		<br>
		<div class="container" align="center">
			<!-- Aquí va una referencia hacia el formulario de Insertar	-->		
			<button class="btn btn-success" data-toggle="modal" data-target="#centralModalSuccess" type="submit">
			    <i class="fas fa-file mr-3 fa-lg"></i>Nuevo movimiento
			</button>
			@include('ventas/insert')
		</div>
		<br>
		<!-- Errores -->
		@include('ventas/mesajes')
	</div>
	<div class="table-responsive table-striped w-auto ml-5 mr-5">
		@if($ventas->isEmpty())
			<h3 align="center">No hay movimientos para mostrar.</h3>
		@else
			<table class="table table-hover table-light">
			  	<thead class="thead-dark">
				    <tr align="center">
				      <th scope="col">Folio</th>
				      <th scope="col">Cliente</th>
				      <th scope="col">Tipo</th>
				      <th scope="col">Total venta</th>
				      <th scope="col">Fecha</th>
				      <th scope="col">Estado</th>
				      <th scope="col">Editar</th>
				      <th scope="col">+ Detalles</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($ventas as $venta)
						<tr align="center">
							<td><strong>{{ $venta->id_venta }}</strong></td>
							<td align="left"><strong>{{ $venta->nombre }}&nbsp;{{ $venta->apellido_paterno }}&nbsp;{{ $venta->apellido_materno }}</strong></td>
							<td>{{$venta->tipo_venta}}</td>
							<td>$&nbsp;{{ $venta->total_venta}}</td>
						    <td>{{ $venta->created_at }}</td>
						    <td>
						    	@if($venta->estado == 'Activa')
						    		<font style="background:#01DF01"; color="white"><strong>&nbsp;&nbsp;{{ $venta->estado }}&nbsp;&nbsp;</strong></font>
						    	@else
						    		<font style="background:#FF0000"; color="white"><strong>&nbsp;&nbsp;{{ $venta->estado }}&nbsp;&nbsp;</strong></font>
						    	@endif
						    </td>
						    <td>
						    	<a href="" data-target="#modal-editar-{{$venta->id_venta}}" data-toggle="modal">
								    <i class="fas fa-edit amber-text fa-2x"></i>
								</a>
						    </td>
						    <td>
								<a href="{{ route('ventas.show', [$venta->id_venta]) }}">
								    <i class="fas fa-list-alt cyan-text fa-2x"></i>
								</a>
						    </td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
	</div>
	<br>
	<nav aria-label="Page navigation example">
	  <ul class="pagination pagination-md pagination-circle pg-blue justify-content-center">
	    <li class="page-item">{{ $ventas->render() }}</li>
	  </ul>
	</nav>
	<br>
@endsection