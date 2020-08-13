@extends('plantilla')
@section('content')
<div class="jumbotron p-5">
  <!-- Card image -->
  <div class="view overlay rounded-top" align="center">
  	<!-- <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="Sample image"> -->
    <img src="https://i.pinimg.com/originals/04/29/92/042992e563d7af84214b1217c2b46d70.jpg" class="img-fluid" alt="Sample image">
    <a href="#">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <div class="card-body text-center mb-3">

    <!-- Title -->
    <h3 class="card-title h3 my-4"><strong>Usuario logueado: {{Auth::user()->name}}</strong></h3>
    <!-- Text -->
    <p class="card-text py-2">Proyeto sobre la administración y control de inventarios de una ferretería.</p>
    <!-- Button -->
    <!-- Button trigger modal-->
	<button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#modalPush">Ingresos</button>
	<button type="button" class="btn btn-danger mb-4" data-toggle="modal" data-target="#modalCart">Casi agotados</button>
	<!--Modal: modalPush-->
	<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog modal-notify modal-success" role="document">
	    <!--Content-->
	    <div class="modal-content text-center">
	      <!--Header-->
	      <div class="modal-header d-flex justify-content-center">
	        <p class="heading">Ingresos</p>
	      </div>
	      <!--Body-->
	      <div class="modal-body">
	        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>
	        <p>Ingresos del día de hoy:</p>
	        <p>...</p>
	        <p>Ingresos del la semana:</p>
	        <p>...</p>
	        <p>Ingresos del mes:</p>
	        <p>...</p>
	      </div>
	      <!--Footer-->
	      <div class="modal-footer flex-center">
	        <a class="btn btn-outline-success waves-effect" data-dismiss="modal">Ok</a>
	      </div>
	    </div>
	    <!--/.Content-->
	  </div>
	</div>
	<!--Modal: modalPush-->
	<!-- Button trigger modal-->

<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Productos con poca existencia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->
  </div>
</div>
@endsection