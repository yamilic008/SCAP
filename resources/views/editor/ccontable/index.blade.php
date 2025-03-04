@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('browser_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
@endsection

@section('header')
<h1>
       Cuentas Contables
        <small>Editor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Cuentas Contables</li>
      </ol>
@endsection

@section('content')
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Cuentas Contables</h3>
              <a href="{{ route('pdfccontable') }}" class="btn btn-info pull-right" target="_blank">Reporte</a>
              <a href="{{ route('ccontable.create') }}" class="btn btn-success pull-right" >Nueva Cuenta</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usuarios" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>CUENTA CONTABLE</th>
                  <th>SECCION</th>
                  <th>CUENTA</th>
                  <th>CREADO</th>
                  <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
               @foreach($dato as $dato)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->CuentaContable }}</td>
                      <td> {{ $dato->seccions->nombre }}</td>
                      <td> {{ $dato->cuentas->nombre}}</td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('ccontable.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          
                          <a href="{{route ('ccontable.copy',$dato->id)}}" class="btn btn-xs btn-default"><i class="fa fa-copy"> </i></a> 
                          <form method='POST' 
                                action="{{route('ccontable.destroy',$dato['id'])}}"
                                style="display:inline" >
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" onclick="return confirm('¿Estas seguro de eliminar este usuario?') ">
                                <i class="fa fa-times"></i>

                          </form>
                      </td>
                  </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>CUENTA CONTABLE</th>
                  <th>SECCION</th>
                  <th>CUENTA</th>
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