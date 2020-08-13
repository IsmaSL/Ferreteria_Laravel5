<!-- Button trigger modal-->
<div class="modal fade" id="modal-delete-{{$contacto->id_cliente}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{ route('contactos.destroy', [$contacto->id_cliente]) }}" method="POST">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
  <!--{{ Form::Open(array('action'=>array('contactoController@destroy',$contacto->id_cliente),'method'=>'delete'))}}-->
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
      <!--Content-->
      <div class="modal-content text-center">
        <!--Header-->
        <div class="modal-header d-flex justify-content-center">
          <p class="heading">Eliminar cliente</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
        </div>
          <!--Body-->
        <div class="modal-body">
          <i class="far fa-trash-alt fa-4x animated rotateIn"></i>
          <p><br><h5>¿Estás seguro de eliminar <strong>toda informacion</strong> de este cliente?<br>
            <strong>ID cliente: {{$contacto->id_cliente}}</strong>
          </h5></p>
        </div>
        <!--Footer-->
        <div class="modal-footer flex-center">
          <button type="submit" class="btn  btn-outline-danger">Si</button>
          <button type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</button>
        </div>
        
      </div>
      <!--/.Content-->
    </div>
  <!--{{ Form::Close()}}-->
</form>
</div>