@extends('layouts.master')



@section('css')
<link rel="stylesheet" href="{{asset('browser_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
@endsection

@section('header')
<h1>
       Desglose de la Actividad
        <small>Proyectista</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Desgloce de la Actividad</li>
      </ol>
@endsection
@section('content')
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Desglose de la Actividad</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#nuevo" >Nuevo <i class="fa fa-fw fa-plus"></i></button>
              <br>
              <p> </p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Tabla de datos  -->
             
                <br>


              <!-- Tabla dinamica -->
              <table id="usuarios" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>USUARIO</th>
                  <th>ROL</th>
                  <th>ACCION</th>
                </tr>
                </thead>
                <tbody>
               @foreach($dato as $dato)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->user->name}}</td>
                      <td> {{ $dato->reporte }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          
                          
                          <!-- <a href="{{route ('extra.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          <button type="button" class="btn btn-xs btn-info" data-toggle="modal" data-target="#exampleModal-{{$dato->id}}"><i class="fa fa-pencil"></i></button>

<!-- -------------------- modal ------------------------------ -->      
                                <div class="modal fade" id="exampleModal-{{$dato->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header"> 
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="exampleModalLabel">Editar Roles</h4>                   
                                      </div>
                                      <form method="POST" action="{{route('extra.update',$dato['id'])}}">
                                            {{ csrf_field() }}{{method_field('PUT')}}
                                            <div class="modal-body">
                                              <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                      <p>
                                                      <select class="form-group js-example-basic-single" name="user_id"  required autofocus  >
                                                         <option value="">Selecciona un usuario</option>
                                                         @for ($i = 0; $i < count($user); $i++)
                                                          <option value="{{$user[$i]->id}}"{{ $user[$i]->id === $dato->user_id ? 'selected' : ' ' }} >{{$user[$i]->name}}</option>
                                                         @endfor
                                                         
                                                     </select> 
                                                     </p>
                                                    </div>
                                                    <div class="form-group" >
                                                      <select class="form-control " name="reporte">
                                                       <option value="">Selecciona un Rol</option>
                                                       <option value="Formacion" {{  $dato->reporte === 'Formacion'? 'selected' : ' ' }}>Formacion Ignaciana</option>
                                                       <option value="CGA" {{  $dato->reporte === 'CGA'? 'selected' : ' ' }}>CGA</option>
                                                       <option value="CyV" {{  $dato->reporte === 'CyV'? 'selected' : ' ' }}>Comunicación y Vinculación</option>
                                                      </select>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Editar</button>
                                            </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

<!-- -------------------- modal ------------------------------ -->
                          <form method='POST' 
                                action="{{route('extra.destroy',$dato['id'])}}"
                                style="display:inline"
                                class="validar" 
                                name="formulario1">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" >
                                <i class="fa fa-times"></i>

                          </form>
                          </a>

                      </td>
                  </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>USUARIO</th>
                  <th>ROL</th>
                  <th>ACCION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<!-- ------------------------- modal -------------------------- --> 
                                <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="exampleModalLabel">Nueva Impresora</h4>
                                      </div>
                                          <form method="POST" action="{{route('extra.store')}}">
                                                {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                      
                                                      <div class="form-group">
                                                        <p>
                                                            <select class="form-group js-example-basic-single" name="user_id"  required autofocus  >
                                                               <option value="">Selecciona un usuario</option>
                                                               @foreach($user as $user)
                                                                   <option value="{{$user->id}}">{{$user->name}}</option>
                                                               @endforeach
                                                           </select> 
                                                        </p>
                                                        
                                                      </div>
                                                      <div class="form-group" >
                                                        <p>
                                                         <select class="form-control " name="reporte">
                                                          <option value="">Selecciona un Rol</option>
                                                          <option value="Formacion" >Formacion Ignaciana</option>
                                                          <option value="CGA" >CGA</option>
                                                          <option value="CyV" >Comunicación y Vinculación</option>
                                                         </select>
                                                        </p>
                                                        
                                                      </div>
                                                      
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Agregar</button>
                                            </div>
                                          </form>
                                    </div>
                                  </div>
                                </div>
<!-- ------------------------- modal -------------------------- -->          
@endsection

@section('js')
<script src="{{asset('browser_components/datatables.net-bs/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('browser_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
$(".validar").on('submit', function(e) {
        var form = $(this);
        e.preventDefault();
        Swal({
          title: 'Estas seguro?',
          text: 'Esta accion no podra ser revertida!',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Si, Borra esto!',
          confirmButtonColor: '#d33',
          cancelButtonText: 'No'
        }).then((result) => {
          if (result.value) {
            this.submit();

          // For more information about handling dismissals please visit
          // https://sweetalert2.github.io/#handling-dismissals
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            /*Swal(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            )*/
          }
        })
    });
  

</script>
<script>
  $(function () {
    
    $('#usuarios').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'select'      : true,
      'stateSave'   : true,

       language     : {
        search:         "Buscar:",
        sLengthMenu:     "Mostrar _MENU_ registros",
        sInfo:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "oPaginate": 
        {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
        },
     }
    })
    
  })


</script>
   <script>
        $(document).ready(function() {
    $('.js-example-basic-single').select2();
    dropdownParent: $('#nuevo');
});
        $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    </script>
  @include('sweetalert::alert')
@endsection