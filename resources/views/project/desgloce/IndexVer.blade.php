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
        <li class="active">Desglose de la Actividad</li>

      </ol>
@endsection
@section('content')
   <div class="box">
    <input type="hidden" name="" value="{{ $r=auth()->user()->hasRole('Supervisor')}}">
            <div class="box-header">
            <h3 class="box-title">Desglose de la Actividad</h3>
              <div class="btn-group pull-right" role="group">
                <div class="btn-group">
                  @if(!$r) 
                    @if($actividad->estado == 'Aprobado') 
                      <button type="button" class="btn btn-success">{{$actividad->estado}}</button>
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @endif
                    @if($actividad->estado == 'No Aprobado')
                      <button type="button" class="btn btn-danger">{{$actividad->estado}}</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @endif
                    @if($actividad->estado == 'Pendiente')
                      <button type="button" class="btn btn-warning">{{$actividad->estado}}</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @endif
                  
                  @endif
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">
                        @if($actividad->estado == 'Aprobado') 
                          <form method='POST' 
                                  <button class="btn  btn-success" onclick="return confirm('Ya aprobaste esta Actividad') "> Aprobado</button>
                           </form>
                          @else
                            <form method='POST' 
                                  action="{{route('reportes.aprobado',$actividad['id'])}}"
                                  style="display:inline" >
                                  {{csrf_field()}}{{method_field('PUT')}}
                                  <input type="hidden" name="_method" value="PUT"> 
                                  <input type="hidden" name="estado" value="Aprobado"> 
                                  <button class="btn  btn-success" onclick="return confirm('¿Estas seguro de Aprobar Esta Actividad?') "> Aprobado</button>
                                  

                            </form>
                          @endif
                        </a>
                    </li>
                    <li>
                      <a href="#">
                        @if($actividad->estado == 'Aprobado') 
                          <form method='POST' 
                                  <button class="btn  btn-danger" onclick="return confirm('No es permitido No Aprobar una Actividad ya Aprobada') "> No Aprobado</button>
                            </form>
                          @else
                            <form method='POST' 
                                  action="{{route('reportes.aprobado',$actividad['id'])}}"
                                  style="display:inline" >
                                  {{csrf_field()}}{{method_field('PUT')}}
                                  <input type="hidden" name="_method" value="PUT"> 
                                  <input type="hidden" name="estado" value="No Aprobado"> 
                                  <button class="btn  btn-danger" onclick="return confirm('¿Estas seguro de No Aprobar Esta Actividad?') "> No Aprobado</button>
                            </form>
                          @endif
                        </a>
                    </li>
                  </ul>
                  
                </div>
                <a href="{{ route('pdfact',$actividad)  }}" class="btn btn-info pull-right" target="_blank" >Reporte</a>
                <!-- <a href="#" class="btn btn-info pull-right" target="_blank">Reporte</a> -->
                <!-- <a href="{{ route('desglosando',$actividad) }}" class="btn btn-success pull-right">Agregar</a> -->

                <br>
                <p> </p>
              </div>
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
                          <a href="{{route ('desgloce.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                          <!-- <form method='POST' 
                                action="{{route('desgloce.destroy',$dato['id'])}}"
                                style="display:inline" >
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"> 
                                <button class="btn btn-xs btn-danger" onclick="return confirm('¿Estas seguro de eliminar este usuario?') ">
                                <i class="fa fa-times"></i>
                          
                          </form> -->
                          </a>

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