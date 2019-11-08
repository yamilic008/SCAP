@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('browser_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
@endsection

@section('header')
<h1>
       Actividades Academicas
        <small>Proyectista</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Actividades Academicas</li>
      </ol>
@endsection
@section('content')
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Actividades Academicas</h3>
              <!-- <a href="#" class="btn btn-info pull-right" target="_blank">Reporte</a> -->
              <a href="{{ route('actacad.create') }}" class="btn btn-success pull-right">Nueva Actividad</a>
              <a href="{{ route('actexpimp') }}" class="btn btn-success pull-right">imp/exp</a>
              <br>
              <!-- <p>Presupuesto Total de Actividades: <b>{{number_format($total,2,",",".")}}</b> Pesos</p>   -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="usuarios" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>DESCRIPCION</th>
                  <th>AREA</th>
                  <th>COSTO</th>
                  <th>FECHA INICIO</th>
                  <th>CREADO</th>
                  <th>ESTADO</th>
                  <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
               @foreach($dato as $dato)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{ number_format($dato->total,2,",",".") }}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                          
                          @if($dato->estado == 'Aprobado')
                            <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          @endif
                          @if($dato->estado == 'Pendiente')
                          <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          <form method='POST' 
                                action="{{route('actacad.destroy',$dato['id'])}}"
                                style="display:inline"
                                class="validar" 
                                name="formulario1">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" >
                                <i class="fa fa-times"></i>

                          </form>
                          @endif
                          @if($dato->estado == 'No Aprobado')
                            <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          <form method='POST' 
                                action="{{route('actacad.destroy',$dato['id'])}}"
                                style="display:inline"
                                class="validar" 
                                name="formulario1">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" >
                                <i class="fa fa-times"></i>

                          </form>
                          @endif
                          </a>

                      </td>
                  </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>DESCRIPCION</th>
                  <th>AREA</th>
                  <th>COSTO</th>
                  <th>FECHA INICIO</th>
                  <th>CREADO</th>
                  <th>ESTADO</th>
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
 @include('sweetalert::alert')
@endsection