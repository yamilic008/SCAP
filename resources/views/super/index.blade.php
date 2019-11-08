@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('browser_components/datatables.net-bs/css/dataTables.bootstrap.css')}}">
@endsection

@section('header')
<h1>
       Actividades Academicas
        <!-- <small>Preescolar</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Actividades Academicas</li>
      </ol>
@endsection
@section('content')
      <input type="hidden" name="" value="{{ $r=auth()->user()->hasRole('Supervisor')}}">
      <input type="hidden" name="" value="{{ $p=auth()->user()->hasRole('Supervisor_Prescolar')}}">
      <input type="hidden" name="" value="{{ $pr=auth()->user()->hasRole('Supervisor_Primaria')}}">
      <input type="hidden" name="" value="{{ $s=auth()->user()->hasRole('Supervisor_Secundaria')}}">
      <input type="hidden" name="" value="{{ $b=auth()->user()->hasRole('Supervisor_Bachillerato')}}">
      <input type="hidden" name="" value="{{ $Cga=auth()->user()->hasRole('Supervisor_CGA')}}">
      <input type="hidden" name="" value="{{ $Fi=auth()->user()->hasRole('Supervisor_FI')}}">
      <input type="hidden" name="" value="{{ $CyV=auth()->user()->hasRole('Supervisor_CyV')}}">

 <div class="box">
  <?php 
          $PrimAprobado=0;
          $PrimPendiente=0;
          $PrimNoAprobado=0;
            $SecAprobado=0;
            $SecPendiente=0;
            $SecNoAprobado=0;
              $BachAprobado=0;
              $BachPendiente=0;
              $BachNoAprobado=0;
                $PreAprobado=0;
                $PrePendiente=0;
                $PreNoAprobado=0;
          $CGAAprobado=0;
          $CGAPendiente=0;
          $CGANoAprobado=0;
            $FIAprobado=0;
            $FIPendiente=0;
            $FINoAprobado=0;
              $CyVAprobado=0;
              $CyVPendiente=0;
              $CyVNoAprobado=0;
        ?>
        @foreach ($dato1 as $dat)
        
            @if($dat->seccions_id == 1)
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$PrimAprobado = $dat->total + $PrimAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$PrimPendiente = $dat->total + $PrimPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$PrimNoAprobado = $dat->total + $PrimNoAprobado}}">
              @endif
            @endif
            @if($dat->seccions_id == 2)
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$SecAprobado = $dat->total + $SecAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$SecPendiente = $dat->total + $SecPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$SecNoAprobado = $dat->total + $SecNoAprobado}}">
              @endif
            @endif
            @if($dat->seccions_id == 3)
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$BachAprobado = $dat->total + $BachAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$BachPendiente = $dat->total + $BachPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$BachNoAprobado = $dat->total + $BachNoAprobado}}">
              @endif
            @endif
            @if($dat->seccions_id == 4)
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$PreAprobado = $dat->total + $PreAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$PrePendiente = $dat->total + $PrePendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$PreNoAprobado = $dat->total + $PreNoAprobado}}">
              @endif
            @endif

            {{isset($dat->extra[0]->reporte)}}
            @if(isset($dat->extra[0]->reporte)  === 'CGA')
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$CGAAprobado = $dat->total + $CGAAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$CGAPendiente = $dat->total + $CGAPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$CGANoAprobado = $dat->total + $CGANoAprobado}}">
              @endif
            @endif
            @if(isset($dat->extra[0]->reporte)  === 'Formacion')
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$FIAprobado = $dat->total + $FIAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$FIPendiente = $dat->total + $FIPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$FINoAprobado = $dat->total + $FINoAprobado}}">
              @endif
            @endif
            @if(isset($dat->extra[0]->reporte)  === 'CyV')
              @if($dat->estado == 'Aprobado')
                <input type="hidden" name="" value="{{$CyVAprobado = $dat->total + $CyVAprobado}}">
              @endif
              @if($dat->estado == 'Pendiente')
                <input type="hidden" name="" value="{{$CyVPendiente = $dat->total + $CyVPendiente}}">
              @endif
              @if($dat->estado == 'No Aprobado')
                <input type="hidden" name="" value="{{$CyVNoAprobado = $dat->total + $CyVNoAprobado}}">
              @endif
            @endif
        @endforeach

            <div class="box-header">
              <h3 class="box-title">Actividades Academicas</h3>
              <!-- <a href="#" class="btn btn-info pull-right" target="_blank">Reporte</a> -->
              <br>
            </div>
            <!-- div superior -->
            <div class="box-body">
              <!-- contador verde -->
 



<!-- -------------!!!! Primaria !!!!!--------------------- -->              
              @if(  $pr )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($PrimAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($PrimPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($PrimNoAprobado,2,".",",")}}</h3>

                    <p>Total No Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif

<!-- -------------!!!! Preescolar !!!!!--------------------- -->              
              @if(  $p ) 
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($PreAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($PrePendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($PreNoAprobado,2,".",",")}}</h3>

                    <p>Total No Aprbado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif

<!-- -------------!!!! Secundaria !!!!!--------------------- -->              
              @if(  $s )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($SecAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($SecPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($SecNoAprobado,2,".",",")}}</h3>

                    <p>Total No Aprbado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif

<!-- -------------!!!! bachillerato !!!!!--------------------- -->              
              @if(  $b )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($BachAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($BachPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($BachNoAprobado,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif
<!-- -------------!!!! CGA !!!!!--------------------- -->              
              @if(  $Cga )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($CGAAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($CGAPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($CGANoAprobado,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif         
<!-- -------------!!!! Formacion Ignaciana !!!!!--------------------- -->              
              @if(  $Fi )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($FIAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($FIPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($FINoAprobado,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif      
<!-- -------------!!!! Comunicacion y Vinculacion !!!!!--------------------- -->              
              @if(  $CyV )
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green color-palette">
                  <div class="inner">
                    <h3>${{number_format($CyVAprobado,2,".",",")}}</h3>

                    <p>Total Aprobado </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow color-palette">
                  <div class="inner">
                    <h3>${{number_format($CyVPendiente,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red color-palette">
                  <div class="inner">
                    <h3>${{number_format($CyVNoAprobado,2,".",",")}}</h3>

                    <p>Total Pendiente </p>
                  </div>
                  <div class="icon">
                    <i class="ion add-circle">$</i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
              @endif                              
<!--------------------------------- Seleccion de seccion -->
              <div class="col-lg-3 col-xs-6">
                <form class="form-horizontal" method="POST" action="{{ route('reportes.PreSec') }}" id="form">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Ciclo</label>
                      <div class="col-md-6">
                           <select class="form-control" name="ciclo"  required autofocus>
                              <option value="">Selecciona un Ciclo</option>
                          @foreach($ciclo as $ciclo)
                                <option  value="{{$ciclo->id}}">{{$ciclo->ciclo}}</option>
                          @endforeach
                          </select> 
                      </div>
                  </div>
                  <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Buscar
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div> 
  </div> 
   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Actividades Academicas</h3>
              <!-- <a href="#" class="btn btn-info pull-right" target="_blank">Reporte</a> -->
              <br>
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
                  <th>ESTADO</th>
                  <th>CREADO</th>
                  <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
               @foreach($dato as $dato)
<!-- ----------------------------------------Preescolar------------------------------------------------ -->
               @if(  $p )
                @if($dato->seccions_id == 4)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>

                      </td>
                  </tr>
                  @endif
                @endif
<!-- ----------------------------------------Primaria------------------------------------------------ -->
                @if(  $pr )
                  @if($dato->seccions_id == 1)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                           <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>  -->
                          
                          </a>

                      </td>
                  </tr>
                  @endif
                @endif
<!-- ----------------------------------------Secundaria------------------------------------------------ -->
                @if(  $s )
                  @if($dato->seccions_id == 2)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>

                      </td>
                  </tr>
                  @endif
                @endif
<!-- ----------------------------------------Bachillerato------------------------------------------------ -->
                @if(  $b )
                  @if($dato->seccions_id == 3)
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td>{{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>

                      </td>
                  </tr>
                  @endif
                @endif
<!-- ----------------------------------------CGA------------------------------------------------ -->
                @if(  $Cga )
                  @if($dato->extra[0]->reporte  === 'CGA')
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>
                          
                            

                      </td>
                  </tr>
                  @endif
                @endif        
<!-- ----------------------------------------Formacion Ignaciana------------------------------------------------ -->
                @if(  $Fi )
                 @if ( $dato->extra[0]->reporte  === 'Formacion')
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}  </td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>

                      </td>
                  </tr>
                 @endif
                @endif       
<!-- ----------------------------------------Formacion Ignaciana------------------------------------------------ -->
                @if(  $CyV )
                  @if($dato->extra[0]->reporte  === 'CyV')
                  <tr>
                      <td> {{ $dato->id }}</td>
                      <td> {{ $dato->nombre }}</td>
                      <td> {{ $dato->descripcion }}</td>
                      <td> {{ $dato->area->nombre }}</td>
                      <td> {{number_format($dato->total,2,".",",")}}</td>
                      <td> {{ $dato->fechainicio->format('d/M/Y')}}</td>
                      <td> 
                        
                         @if( $dato->estado==='No Aprobado')
                          <span class="badge bg-red" >{{$dato->estado}}</span>
                          @elseif($dato->estado==='Aprobado')
                             <span class="badge bg-green" >{{$dato->estado}} </span>
                          @else
                              <span class="badge bg-yellow" >{{$dato->estado}}</span>
                        @endif
                      </td>
                      <td> {{ $dato->created_at->format('d/M/Y') }}</td>
                      <td>
                       <!--  <a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> -->
                          <a href="{{route ('desgloce.show',$dato->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="{{route ('actacad.edit',$dato->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a> -->
                          
                          </a>

                      </td>
                  </tr>
                  @endif
                @endif                                         
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
                  <th>ESTADO</th>
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