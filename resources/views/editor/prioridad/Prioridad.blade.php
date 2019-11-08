@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('browser_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
@endsection

@section('header')
<h1>
        Prioridades
        <small>Editor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Prioridades</li>
      </ol>
@endsection

@section('content')
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Prioridades</h3>
              <a href="{{ route('prioridad.create') }}" class="btn btn-success pull-right">Crear Prioridad</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usuarios" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>CLAVE</th>
                  <th>NOMBRE</th>
                  <th>DESCRIPCION</th>
                  <th>CREADO</th>
                  <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
               @foreach($prioridad as $prioridad)
                  <tr>
                      <td> {{ $prioridad->id }}</td>
                      <td> {{ $prioridad->clave }}</td>
                      <td> {{ $prioridad->nombre }}</td>
                      <td> {{ $prioridad->descripcion }}</td>
                      <td> {{ $prioridad->created_at }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('prioridad.edit',$prioridad->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          <form method='POST' 
                                action="{{route('prioridad.destroy',$prioridad['id'])}}"
                                style="display:inline" >
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-xs btn-danger" onclick="return confirm('¿Estas seguro de eliminar este usuario?') ">
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
                  <th>CLAVE</th>
                  <th>NOMBRE</th>
                  <th>DESCRIPCION</th>
                  <th>CREADO</th>
                  <th>ACCIONES</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection

@section('js')
<script src="{{asset('browser_components/datatables.net-bs/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('browser_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

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
@endsection