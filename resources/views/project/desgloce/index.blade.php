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
              @if($actividad->estado == 'Pendiente' || $actividad->estado == 'No Aprobado' )
                <a href="{{ route('pdfact',$actividad)  }}" class="btn btn-info pull-right" target="_blank" >Reporte</a>
                <!-- <a href="#" class="btn btn-info pull-right" target="_blank">Reporte</a> -->
                <a href="{{ route('desglosando',$actividad) }}" class="btn btn-success pull-right">Agregar</a>
                <a href="{{ route('expimp',$actividad) }}" class="btn btn-success pull-right">imp/exp</a>
              @endif
              @if($actividad->estado == 'Aprobado')
                <a href="{{ route('pdfact',$actividad)  }}" class="btn btn-info pull-right" target="_blank" >Reporte</a>
              @endif
              <br>
              <p> </p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Tabla de datos  -->
              <table class="table table-bordered">
                <caption><b> Activiad Seleccionada</b></caption>
                  <tr>
                    <th>Actividad</th>
                    <td>{{$actividad->nombre}}</td>
                    <th>Area</th>
                    <td>{{$actividad->area->nombre}}</td>
                  </tr>
                  <tr>
                    <th>Seccion</th>
                    <td>{{$actividad->seccions->nombre}}</td>
                    <th>Linea de Accion</th>
                    <td>{{$actividad->LineaAccion->nombre}}</td>
                  </tr>
                  <tr>
                    <th>Inicio</th>
                    <td>{{$actividad->fechainicio->format('d-m-Y')}}</td>
                    <th>Fin</th>
                    <td>{{$actividad->fechafin->format('d-m-Y')}}</td>
                  </tr>
                  <tr>
                    <th>Descripcion</th>
                    <td>{{$actividad->descripcion}}</td>
                    <th>Objetivo</th>
                    <td>{{$actividad->objetivo}}</td>
                  </tr>
                  <tr>
                    <th>Costo Total de esta Actividad:</th>
                    <td><b> <font size="5">{{number_format($total,2,".",",")}} MXN</font></b></td>
                  </tr>
              </table>
                <br>


              <!-- Tabla dinamica -->
              <table id="usuarios" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>CUENTA CONTABLE</th>
                  <th>CANTIDAD</th>
                  <th>RECURSO</th>
                  <th>PROVEEDOR</th>
                  <th>PRECIO UNITARIO</th>
                  <th>TOTAL</th>
                  <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
               @foreach($dato as $dato)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->ccontable->CuentaContable}}-{{ $dato->ccontable->cuentas->nombre}}</td>
                      <td> {{ $dato->cantidad }}</td>
                      <td> {{ $dato->recurso }}</td>
                      <td> {{ $dato->proveedor }}</td>
                      <td> {{ number_format($dato->precio,2,".",",")}}</td>
                      <td> <b>{{ number_format($dato->Total,2,".",",")}}</b></td>
                      <!-- <td> {{ $dato->created_at->format('d/M/Y') }}</td> -->
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          @if($actividad->estado == 'Aprobado')
                            <a href="{{route ('desgloce.edit',$dato->id)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                          @endif
                          @if($actividad->estado == 'Pendiente' || $actividad->estado == 'No Aprobado' )
                          
                          
                          <a href="{{route ('desgloce.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                          <form method='POST' 
                                action="{{route('desgloce.destroy',$dato['id'])}}"
                                style="display:inline"
                                class="validar" 
                                name="formulario1">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" >
                                <i class="fa fa-times"></i>

                          </form>
                          </a>
                          @endif

                      </td>
                  </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>CUENTA CONTABLE</th>
                  <th>CANTIDAD</th>
                  <th>RECURSO</th>
                  <th>PROVEEDOR</th>
                  <th>PRECIO UNITARIO</th>
                  <th>TOTAL</th>
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