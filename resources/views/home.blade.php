@extends('layouts.master')

@push('style')
<link rel="stylesheet" href="{{asset('browser_components/Ionicons/css/ionicons.min.css')}}">

@endpush

@section('content')
<div class="container">
    <div class="row">

      
      <input type="hidden" name="" value="{{ $r=auth()->user()->hasRole('Supervisor')}}">
      <input type="hidden" name="" value="{{ $p=auth()->user()->hasRole('Supervisor_Prescolar')}}">
      <input type="hidden" name="" value="{{ $pr=auth()->user()->hasRole('Supervisor_Primaria')}}">
      <input type="hidden" name="" value="{{ $s=auth()->user()->hasRole('Supervisor_Secundaria')}}">
      <input type="hidden" name="" value="{{ $b=auth()->user()->hasRole('Supervisor_Bachillerato')}}">
      <input type="hidden" name="" value="{{ $Cga=auth()->user()->hasRole('Supervisor_CGA')}}">
      <input type="hidden" name="" value="{{ $Fi=auth()->user()->hasRole('Supervisor_FI')}}">
      <input type="hidden" name="" value="{{ $CyV=auth()->user()->hasRole('Supervisor_CyV')}}">
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
       
        
    @if(  $r || $p || $pr || $s || $b || $Cga || $Fi || $CyV)
        
        <?php 
          $prim=0;
          $sec=0;
          $bach=0;
          $pre=0;
          $cga=0;
          $fi=0;
          $cyv=0;

        ?>

        @foreach ($dato as $dat)
                @if($dat->seccions_id === 1 )
                <input type="hidden" name="" value="{{$prim++}}">
                @if($dat->estado === 'Aprobado')
                  <input type="hidden" name="" value="{{$PrimAprobado = $dat->total + $PrimAprobado}}">
                 @endif 
                @endif
                @if($dat->seccions_id === 2)
                  <input type="hidden" name="" value="{{$sec++}}">
                  @if($dat->estado === 'Aprobado')
                    <input type="hidden" name="" value="{{$SecAprobado = $dat->total + $SecAprobado}}">
                  @endif
                @endif
                @if($dat->seccions_id === 3)
                  <input type="hidden" name="" value="{{$bach++}}">
                  @if($dat->estado === 'Aprobado')
                    <input type="hidden" name="" value="{{$BachAprobado = $dat->total + $BachAprobado}}">
                  @endif
                @endif
                @if($dat->seccions_id === 4)
                  <input type="hidden" name="" value="{{$pre++}}">
                  @if($dat->estado === 'Aprobado')
                    <input type="hidden" name="" value="{{$PreAprobado = $dat->total + $PreAprobado}}">
                  @endif
                @endif
          @foreach ($dat->extra as $extra)
              
          



              @if($dat->seccions_id === 1 && $dat->estado === 'Aprobado')
              <input type="hidden" name="" value="{{$PrimAprobado = $dat->total - $PrimAprobado}}">
              @endif
              @if($dat->seccions_id === 2 && $dat->estado === 'Aprobado')
              <input type="hidden" name="" value="{{$SecAprobado = $dat->total - $SecAprobado}}">
              @endif
              @if($dat->seccions_id === 3 && $dat->estado === 'Aprobado')
              <input type="hidden" name="" value="{{$BachAprobado = $dat->total - $BachAprobado}}">
              @endif


              @if($extra->reporte  === 'CGA')
                <input type="hidden" name="" value="{{$cga++}}">
                @if($dat->estado === 'Aprobado')
                  <input type="hidden" name="" value="{{$CGAAprobado = $dat->total + $CGAAprobado}}">
                @endif
              @endif
              @if($extra->reporte  === 'Formacion')
                <input type="hidden" name="" value="{{$fi++}}">
                @if($dat->estado === 'Aprobado')
                  <input type="hidden" name="" value="{{$FIAprobado = $dat->total + $FIAprobado}}">
                @endif
              @endif
              @if($extra->reporte  === 'CyV')
                <input type="hidden" name="" value="{{$cyv++}}">
                @if($dat->estado === 'Aprobado')
                  <input type="hidden" name="" value="{{$CyVAprobado = $dat->total + $CyVAprobado}}">
                @endif
              @endif
          @endforeach
        
            
            
           
        @endforeach
<!-- -------------------------------------------- Supervisor ---------------------------------------------------------- -->         
@if(  $r )        
<div class="row">        
  <!-- --------------------tarjeta preescolar ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Preescolar</h3>
      </div>
      <div class="box-body">
        <!-- <div class="small-box bg-green color-palette">
          <div class="inner">
            <h3>{{$pre}}</h3>
        
            <p>Preescolar</p>
          </div>
          <div class="icon">
            <i class="ion ">Pre</i>
          </div>
          <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
        
        </div> -->

        <div class="small-box bg-green color-palette">
          <div class="inner">
            <h3>${{number_format($PreAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
   <!-- --------------------tarjeta Primaria ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Primaria</h3>
      </div>
      <div class="box-body">
     <!--   <div class="small-box bg-yellow">
       <div class="inner">
         <h3>{{$prim}}</h3>
     
         <p>Primaria</p>
       </div>
       <div class="icon">
         <i class="ion ">Prim</i>
       </div>
       <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
     </div> -->
        
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>${{number_format($PrimAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
     <!-- --------------------tarjeta Secundaria ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Secundaria</h3>
      </div>
      <div class="box-body">
     <!--   <div class="small-box bg-orange">
       <div class="inner">
         <h3>{{$sec}}</h3>
     
         <p>Secundaria</p>
       </div>
       <div class="icon">
         <i class="ion ">Sec</i>
       </div>
       <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
     </div> -->
        
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>${{number_format($SecAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
       <!-- --------------------tarjeta Bachillerato ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Bachillerato</h3>
      </div>
      <div class="box-body">
    <!--    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{$bach}}</h3>
    
        <p>Bachillerato</p>
      </div>
      <div class="icon">
        <i class="ion ">Bach</i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
    </div> -->
        
        <div class="small-box bg-red">
          <div class="inner">
            <h3>${{number_format($BachAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
         <!-- --------------------tarjeta CGA ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">CGA</h3>
      </div>
      <div class="box-body">
  <!--      <div class="small-box bg-green">
    <div class="inner">
      <h3>{{$cga}}</h3>
  
      <p>Bachillerato</p>
    </div>
    <div class="icon">
      <i class="ion ">CGA</i>
    </div>
    <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
  </div> -->
        
        <div class="small-box bg-maroon-active">
          <div class="inner">
            <h3>${{number_format($CGAAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
           <!-- --------------------tarjeta FI ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Formacion Ignaciana</h3>
      </div>
      <div class="box-body">
  <!--      <div class="small-box bg-red">
    <div class="inner">
      <h3>{{$fi}}</h3>
  
      <p>Bachillerato</p>
    </div>
    <div class="icon">
      <i class="ion ">FI</i>
    </div>
    <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
  </div> -->
        
        <div class="small-box bg-purple-active">
          <div class="inner">
            <h3>${{number_format($FIAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>
             <!-- --------------------tarjeta Comunicacion y vinculacion ------------ -->
  <div class="col-lg-3 col-xs-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>

        <h3 class="box-title">Comunicación y vinculación</h3>
      </div>
      <div class="box-body">
     <!--   <div class="small-box bg-orange">
       <div class="inner">
         <h3>{{$cyv}}</h3>
     
         <p>Bachillerato</p>
       </div>
       <div class="icon">
         <i class="ion ">CyV</i>
       </div>
       <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
     </div> -->
        
        <div class="small-box bg-aqua-active">
          <div class="inner">
            <h3>${{number_format($CyVAprobado,2,".",",")}}</h3>

            <p>Total Aprobado</p>
          </div>
          <div class="icon">
            <i class="ion ">$</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
    </div>
  </div>

</div>
@endif 


<!-- -------------------------------------------------- ---------------------------------------------------------- -->
@if(  !$r )  
<div class="box box-default">
  <div class="box-header with-border">
    <i class="fa fa-bullhorn"></i>

    <h3 class="box-title">Actividades Academicas <b>Pendientes</b> por Seccion</h3>
  </div>
  <div class="box-body">
 @endif  
    
      
      

     
<!-- -------------------------------------------- Preescolar ---------------------------------------------------------- --> 
     @if(  $p )
      <div class="col-lg-12 col-xs-12">
        <div class="small-box bg-green color-palette">
          <div class="inner">
            <h3>{{$pre}}</h3>

            <p>Preescolar</p>
          </div>
          <div class="icon">
            <i class="ion ">Pre</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif
<!-- -------------------------------------------- Primaria ---------------------------------------------------------- --> 
      @if(  $pr )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$prim}}</h3>

            <p>Primaria</p>
          </div>
          <div class="icon">
            <i class="ion ">Prim</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif
<!-- -------------------------------------------- Secundaria ---------------------------------------------------------- --> 
      @if(  $s )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>{{$sec}}</h3>

            <p>Secundaria</p>
          </div>
          <div class="icon">
            <i class="ion ">Sec</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif
<!-- -------------------------------------------- Bachillerato ---------------------------------------------------------- --> 
      @if(  $b )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$bach}}</h3>

            <p>Bachillerato</p>
          </div>
          <div class="icon">
            <i class="ion ">Bach</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif
<!-- -------------------------------------------- CGA ---------------------------------------------------------- --> 
      @if(  $Cga )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$cga}}</h3>

            <p>CGA</p>
          </div>
          <div class="icon">
            <i class="ion ">CGA</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif    
<!-- -------------------------------------------- Formacion Ignaciana ---------------------------------------------------------- --> 
      @if(  $Fi )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$fi}}</h3>

            <p>Formacion</p>
          </div>
          <div class="icon">
            <i class="ion ">Formacion Ignaciana</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif       
<!-- -------------------------------------------- Comunicacion y Vinculacion ---------------------------------------------------------- --> 
      @if(  $CyV )
      <div class="col-lg-12 col-xs-6">
        <div class="small-box bg-orange">
          <div class="inner">
            <h3>{{$cyv}}</h3>

            <p>Comunicación y Vinculación</p>
          </div>
          <div class="icon">
            <i class="ion ">Comunicación</i>
          </div>
          <!-- <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      @endif           

    </div>

</div>

      @endif

    @if(  $r )
      <div class="box box-default">
        <div class="box-header with-border">
          <i class="fa fa-bar-chart"></i>

          <h3 class="box-title">Graficas</h3>
        </div>
        <div class="box-body">
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
          <center><div id="piechart" style="width: 900px; height: 500px;"></div></center>

        </div>
      </div>

    @endif
   


    @if(  !$r && !$p && !$pr && !$s && !$b && !$Cga && !$Fi && !$CyV )


      
      
      
        <div class="col-md-8 col-md-offset-2">


          <table border="0" class="table table-striped">
            <tr>
              <td align="center"><img src="{{asset('img/scap.png')}}" class="" alt="User Image"></td>
            </tr>
            <tr>
              <td colspan="" rowspan="" headers=""></td>
            </tr>
            <tr class="success">
              <td><h1> <font color="red"> Esta es un software en  <a href="https://es.wikipedia.org/wiki/Fases_del_desarrollo_de_software#Alfa" target="_blank"><b>fase ALPHA</b></a> </font></h1></td>
            </tr>
            <tr>
              <td>
                <p align="center"> Este software no es una version terminada, las vistas, tablas y registros pueden cambiar sin previo aviso en apariencia y funcionalidad </p>
              </td>
            </tr>
          </table>
          

            <div class="panel panel-default">
                <div class="panel-heading">Historial de cambios</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th style="width: 10px"></th>
                  <th></th>
                  <!-- <th>Progreso</th> -->
                  <!-- <th style="width: 40px">Label</th> -->
                </tr>
                <tr>
                  <th style="width: 10px">Versión</th>
                  <th>Cambios</th>
                  <!-- <th>Progreso</th> -->
                  <!-- <th style="width: 40px">Label</th> -->
                </tr>
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Observaciones corregidas</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               <b> v0.4.2</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      11/10/2018
                       <UL type = disk >
                        <LI>al agregar una actividad el cuadro que decia observacion ahora se ha cambiado por <b>objetivo</b>  </LI>
                        <li>Ahora al momento de editar las actividades academicas ya se cargan las prioridades y gestiones </li>
                        <li>Se corrigio el error que aparecia al momento de actualizar un articulo, el total no se actualizaba en la actividad academica </li>
                        <li>Se ha agregado las siguientes secciones: <b>CGA</b>, <b>Formacion Ignaciana</b>, <b>Comunicacion y vinculacion</b> </li>
                        <li>Se ha agregado el panel de control para el supervisor de las siguientes secciones: <b>CGA</b>, <b>Formacion Ignaciana</b>, <b>Comunicacion y vinculacion</b> </li>
                        <li>Se ha agregado los siguintes roles: <b>Supervisor de CGA</b>, <b>Supervisor de Formacion Ignaciana</b>, <b>Supervisor de Comunicacion y vinculacion</b> </li>
                         
                      </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Todos</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse40" aria-expanded="false" aria-controls="colapse40">
                                <b>v0.4.0</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse40" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                       <UL type = disk >
                      <LI>Se ha agregado el apartado de <b>Comentario</b> para que los usuarios agregen comentarios sobre fallas o mejoras del sistema</LI>
                      <li>Se agrego el apartado de <b>Manual</b> para mostrar los detalles ya establecidos</li>
                       
                    </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Todos</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse30" aria-expanded="false" aria-controls="colapse30">
                                <b>v0.3.0</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse30" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <UL type = disk >
                         <LI>Se ha agregado el apartado de <b>Mis Actividades </b> donde los usuarios podran ver las actividades a las que tienen acceso
                         <LI>Se han agregado el sub apartado <b>Actividades Academicas</b>
                           <ul>
                             <li>Se pueden agregar Actividades academicas</li>
                             <ul>
                               <li>Se agrego un apartado con la ayuda para prioridades y lineas de accion </li>
                               <li>Se agrego un sistema de rango de fechas, que cuenta los dias trazados</li>
                             </ul>
                             <li>Se muestra una lista de actividades academicas</li>
                             <li>Se muestra el <b>presupuesto total</b> que se ha utilizado para obtener la suma de los costos de todas las actividades hasta el momento </li>
                             <li>Se muestra una lista de actividades academicas</li>
                             <li>las actividades academicas muestran </li>
                             <ul>
                               <li>Nombre de la actividad</li>
                               <li>Descripcion</li>
                               <li>Area a la que pertenece la actividad</li>
                               <li>Costo de dicha actividad</li>
                               <li>fecha en la que iniciara la actividad</li>
                               <li>Fecha en la que fue creada la actividad</li>
                             </ul>
                             <li>Se pueden eliminar las actividades</li>
                           </ul>
                           <LI>Se han agregado dentro de cada actividad el boton  <b>"+"</b> indicativo a agregar Desgloce de Actividades</LI>
                           <ul>
                             <li>Se agregaron los detalles de la actividad, resaltando el costo toal de la actividad</li>
                             <li>se muestra una lista de actividades mostrando unicamente <b>Cuenta contable | cantidad | recurso | proveedor | precio unidatio | total </b> </li>
                             <li>se configuro el boton de agregar desgloce </li>
                             <ul>
                               <li> en este apartado se filtran las cuentas contable conforme a la <b> seccion</b> que se selecciono con anterioridad</li>
                               <li>este formulario hace la operacion correspondiente relacionada con la cantidad de productos a introducir y el precio indicado, siempre y cuando se le indique si el costo incluye IVA o no </li>
                             </ul>
                             <li>se agrego el boton de eliminar algun desgloce de actividad</li>
                             <li>se creo el boton de reporte</li>
                             <ul>
                               <li>el reporte muestra los datos de la Actividad Academica seguido del desgloce de los recursos que contiene esa Actividad </li>
                               <li>Se muestra la informacion que se muestra en el apartado de <b>Desgloce</b></li>
                             </ul>
                           </ul>
                       </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Todos</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse28" aria-expanded="false" aria-controls="colapse28">
                                <b>v0.2.8</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse28" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">

                         <UL type = disk >
                          <LI>Se han agregado la tabla <b>Area</b>
                          <LI>Se agregaron las <b>Altas</b> sobre la tabla
                          <LI>Se agregaron las <b>Bajas</b> sobre la tabla
                          <LI>Se agregaron las <b>Cambios</b> sobre la tabla
                          <LI>para esta tabla hacen falta
                        </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Todos</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse27" aria-expanded="false" aria-controls="colapse27">
                                <b>v0.2.7</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse27" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                          <UL type = disk >
                           <LI>Se han agregado los formatos de reportes para la tabla <b>Linea de Accion</b> con los ajustes necesarios para su buena presentacion
                           <LI>Se han agregado los formatos de reportes para la tabla <b>Cuentas Contables</b> con los ajustes necesarios para su buena presentacion
                         </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Todos</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse26" aria-expanded="false" aria-controls="colapse26">
                                <b>v0.2.6</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse26" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                           <UL type = disk >
                            <LI>Se han agregado los formatos de reportes para la tabla <b>Secciones</b>
                              
                          
                          </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse25" aria-expanded="false" aria-controls="colapse25">
                                <b>v0.2.5</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse25" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                          <UL type = disk >
                           <LI>Se han agregado los formatos de reportes para la tabla <b>Secciones</b>
                             
                         
                         </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse24" aria-expanded="false" aria-controls="colapse24">
                                <b>v0.2.4</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse24" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                           <UL type = disk >
                            <LI>Se han agregado la tabla <b>Conceptos</b>
                            <LI>Ahora se puden <b> Crear </b> la tabla Conceptoss para Editores 
                            <LI>Ahora se puden <b> Ver </b> la tabla Conceptoss para Editores
                            <LI>Ahora se puden <b> Actualizar </b> la tabla Conceptoss para Editores
                            <LI>Ahora se puden <b> Borrar </b> la tabla Conceptoss para Editores
                            <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                          </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse23" aria-expanded="false" aria-controls="colapse23">
                                <b>v0.2.3</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse23" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <UL type = disk >
                             <LI>Se han agregado la tabla <b>Cuentas Contables</b>
                             <LI>Ahora se puden <b> Crear </b> la tabla Cuentas Contables para Editores 
                             <LI>Ahora se puden <b> Ver </b> la tabla Cuentas Contables para Editores
                             <LI>Ahora se puden <b> Actualizar </b> la tabla Cuentas Contables para Editores
                             <LI>Ahora se puden <b> Borrar </b> la tabla Cuentas Contables para Editores
                             <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                           </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse22" aria-expanded="false" aria-controls="colapse22">
                                <b>v0.2.2</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse22" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                             <UL type = disk >
                              <LI>Se han agregado la tabla <b>Cuenta</b>
                              <LI>Ahora se puden <b> Crear </b> la tabla Cuenta para Editores 
                              <LI>Ahora se puden <b> Ver </b> la tabla Cuenta para Editores
                              <LI>Ahora se puden <b> Actualizar </b> la tabla Cuenta para Editores
                              <LI>Ahora se puden <b> Borrar </b> la tabla Cuenta para Editores
                              <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                            </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse21" aria-expanded="false" aria-controls="colapse21">
                                <b>v0.2.1</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse21" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                          <UL type = disk >
                           <LI>Se han agregado la tabla <b>Secciones</b>
                           <LI>Ahora se puden <b> Crear </b> la tabla Secciones para Editores 
                           <LI>Ahora se puden <b> Ver </b> la tabla Secciones para Editores
                           <LI>Ahora se puden <b> Actualizar </b> la tabla Secciones para Editores
                           <LI>Ahora se puden <b> Borrar </b> la tabla Secciones para Editores
                           <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                         </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse20" aria-expanded="false" aria-controls="colapse20">
                                <b>v0.2.0</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse20" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                           <UL type = disk >
                            <LI>Se han agregado la tabla <b>Linea de Accion</b>
                            <LI>Ahora se puden <b> Crear </b> Lineas de accion para Editores y estas estan relacionadas con las prioridades
                            <LI>Ahora se puden <b> Ver </b> Lineas de accion para Editores
                            <LI>Ahora se puden <b> Actualizar </b> Lineas de accion para Editores
                            <LI>Ahora se puden <b> Borrar </b> Lineas de accion para Editores
                            <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                          </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Observaciones corregidas</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse19" aria-expanded="false" aria-controls="colapse19">
                                <b>v0.1.19</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse19" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <UL type = disk >
                             <LI>Se agrego el logotipo de la institucion en el login
                             <LI>La administracion de la tabla <b>Gestion/Direccion</b>  ahora esta en español
                             <LI>La administracion de la tabla <b>Prioridades</b>  ahora esta en español
                             <LI>La administracion de la tabla <b>Linea de Accion</b>  ahora esta en español
                           </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Observaciones corregidas</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse19" aria-expanded="false" aria-controls="colapse19">
                                <b>v0.1.19</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse19" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <UL type = disk >
                             <LI>Se agrego el logotipo de la institucion en el login
                             <LI>La administracion de la tabla <b>Gestion/Direccion</b>  ahora esta en español
                             <LI>La administracion de la tabla <b>Prioridades</b>  ahora esta en español
                             <LI>La administracion de la tabla <b>Linea de Accion</b>  ahora esta en español
                           </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Editor</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse11" aria-expanded="false" aria-controls="colapse11">
                                <b>v0.1.1</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse11" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                             <UL type = disk >
                              <LI>Se ha habilitaod la parte de creacion de <b>Prioridad,</b> donde el usuario puede <b>Actualizar</b>  direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Prioridad,</b> donde el usuario puede <b>Borrar</b>  direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Prioridad,</b> donde el usuario puede <b>Mostrar</b> direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Prioridad,</b> donde el usuario puede <b>Crear</b> direcciones para el uso de los proyectistas
                              <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                              <LI>Se ha habilitaod la parte de creacion de <b>Gestion/Direccion,</b> donde el usuario puede <b>Actualizar</b>  direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Gestion/Direccion,</b> donde el usuario puede <b>Borrar</b>  direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Gestion/Direccion,</b> donde el usuario puede <b>Mostrar</b> direcciones para el uso de los proyectistas
                              <LI>Se ha habilitaod la parte de creacion de <b>Gestion/Direccion,</b> donde el usuario puede <b>Crear</b> direcciones para el uso de los proyectistas
                              <LI>se Han Generado los seeders necesarios para el llenado de la tabla 
                              <LI>se ha habilitado la parte del editor
                            </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Super Usuario</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse10" aria-expanded="false" aria-controls="colapse10">
                                <b>v0.1.0</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                             <UL type = disk >
                               <LI>Se han creado los permisos para este rol
                               <LI>Este usuario puede Crear usuarios
                               <LI>Este usuario puede Borrar usuarios
                               <LI>Este usuario puede Actualizar usuarios 
                               <LI>Este usuario puede Eliminar usuarios 
                             </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b> Super Usuario</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse10" aria-expanded="false" aria-controls="colapse10">
                                <b>v0.1.0</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse10" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                             <UL type = disk >
                               <LI>Se han creado los permisos para este rol
                               <LI>Este usuario puede Crear usuarios
                               <LI>Este usuario puede Borrar usuarios
                               <LI>Este usuario puede Actualizar usuarios 
                               <LI>Este usuario puede Eliminar usuarios 
                             </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b>Roles</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse02" aria-expanded="false" aria-controls="colapse02">
                                <b>v0.0.2</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse02" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <UL type = disk >
                                <LI>Se asignaron roles a la base de datos
                                <LI>SuperSu ( solo tendra permisos para generar usuarios) 
                                <LI> Editor (solo podra modificar las tablas necesarias para la creacion de proyectos) 
                                <LI> Supervisor (sera el jefe de area de departamento) 
                                <LI> Proyectista (es la persona encargada de subir proyectos)
                            </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->
<!-- --------------------------------------------------------- -->
               <div class="card">
                <tr>
                      <td><b>Roles</b></td>
                        
                        <td>
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn-lg btn-block collapsed btn-link " data-toggle="collapse" data-target="#colapse01" aria-expanded="false" aria-controls="colapse01">
                                <b>v0.0.1</b>
                              </button>
                            </h5>
                          </div>
                        </td>
                  
                </tr>
                <tr>
                  <td></td>
                  <td>
                  <div id="colapse01" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                            <UL type = disk >
                              <LI>Se Genero una plantilla responsiva para el manejo de informacion y adaptacion a telefonia movil
                              <LI>Se adapto y se implemento en funcionamiento la plantilla 
                              <LI>La apariencia se adapto para que concordara con los colores institucionales
                            </UL>
                    </div>
                  </div>
                  </td>
                </tr>
                </div>
<!-- --------------------------------------------------------- -->




                <!--                      1                                -->
             
              </table>
            </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>
@endsection
@section('js')
  <script src="{{asset('js/lib/jquery/jquery.min.js ')}}"></script>
  <script src="{{asset('browser_components/chartjs/Chart.min.js')}}"></script>
  <!-- <script src="{{asset('browser_components/chartjs/GrafGen.js')}}"></script> -->
  <script src="{{asset('js/gloader.js ')}}"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Seccion', 'Gasto'],
          ['Preescolar',     {{$PreAprobado}}],
          ['Primaria',      {{$PrimAprobado}}],
          ['Secundaria',  {{$SecAprobado}}],
          ['Bachillerato', {{$BachAprobado}}],
          ['CGA', {{$CGAAprobado}}],
          ['Formación Ignaciana', {{$FIAprobado}}],
          ['Comunicación y Vinculación', {{$CyVAprobado}}],
          
        ]);

        var options = {
          title: 'Gastos por Seccion',
          colors:[
            '#00A760',
            '#FB9B2B',
            '#FF832C',
            '#E94841',
            '#D7005B',
            '#5C4F94',
            '#00A5CC'
            ]
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


@endsection