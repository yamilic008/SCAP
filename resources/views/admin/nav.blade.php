<!-- <li class="active"><a href="{{ route('usuario.index') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li> -->

{{ $r=auth()->user()->hasRole('Super_Usuario')}}
    @if($r)
  <li class="treeview  {{request()->is('usuario') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-users"></i> <span>Usuarios</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('usuario') ? 'class=active' : ''}}><a href="{{ route('usuario.index') }}"><i class="fa fa-eye"></i>Ver</a></li>
        
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.index') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
    </li>    
@endif
    {{ $r=auth()->user()->hasRole('Editor')}}
@if($r)
    <li class="treeview 
      {{request()->is('home') ? 'active' : ''}}
      {{request()->is('gestion') ? 'active' : ''}} 
      {{request()->is('ciclo') ? 'active' : ''}}
      {{request()->is('area') ? 'active' : ''}} 
      {{request()->is('prioridad') ? 'active' : ''}} 
      {{request()->is('accion') ? 'active' : ''}}
      {{request()->is('seccion') ? 'active' : ''}}
      {{request()->is('cuenta') ? 'active' : ''}}
      {{request()->is('ccontable') ? 'active' : ''}}
      {{request()->is('concepto') ? 'active' : ''}}
      {{request()->is('extra') ? 'active' : ''}}
      ">
      <a href="#"><i class="fa fa-table"></i> <span>Tablas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('ciclo') ? 'class=active' : ''}}><a href="{{ route('ciclo.index') }}"><i class="fa fa-bicycle"></i>Ciclo</a></li>
        <li {{request()->is('gestion') ? 'class=active' : ''}}><a href="{{ route('gestion.index') }}"><i class="fa fa-briefcase"></i>Gestion/Direccion</a></li>
        <li {{request()->is('area') ? 'class=active' : ''}}><a href="{{ route('area.index') }}"><i class="fa fa-paw "></i>Area</a></li>
        <li {{request()->is('prioridad') ? 'class=active' : ''}}><a href="{{ route('prioridad.index') }}"><i class="fa fa-sitemap"></i>Prioridades</a></li>
        <li {{request()->is('accion') ? 'class=active' : ''}}><a href="{{ route('accion.index') }}"><i class="fa fa-amazon"></i>Linea de Accion</a></li>
        <li {{request()->is('seccion') ? 'class=active' : ''}}><a href="{{ route('seccion.index') }}"><i class="fa fa-map-signs"></i>Secciones</a></li>
        <li {{request()->is('cuenta') ? 'class=active' : ''}}><a href="{{ route('cuenta.index') }}"><i class="fa fa-tripadvisor"></i>Cuentas</a></li>
        <li {{request()->is('ccontable') ? 'class=active' : ''}}><a href="{{ route('ccontable.index') }}"><i class="fa fa-bank "></i>Cuentas Contables</a></li>
        <li {{request()->is('concepto') ? 'class=active' : ''}}><a href="{{ route('concepto.index') }}"><i class="fa  fa-sort-alpha-asc "></i>Conceptos</a></li>
        <li {{request()->is('extra') ? 'class=active' : ''}}><a href="{{ route('extra.index') }}"><i class="fa  fa-plus "></i>Extra</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
    </li>
@endif
    {{ $r=auth()->user()->hasRole('Proyectista')}}
    @if(  $r )

    <li class="treeview 
    {{request()->is('actacad') ? 'active' : ''}}
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('coment') ? 'active' : ''}}
    ">
      <a href="#"><i class="fa fa-paper-plane-o"></i> <span>Mis Actividades </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('actacad/*') ? 'class=active' : ''}}><a href="{{ route('actacad.index') }}"><i class="fa fa-money"></i>Actividades Academicas</a></li>

       <!--  <li class=""><a href="{{ route('project.index') }}"><i class="fa fa-plane"></i>Proyectos </a></li>  -->
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li>     


<!-- ---------------------- Supervisor --------------------------------------->
    {{ $r=auth()->user()->hasRole('Supervisor')}}
    @if(  $r )
    
    <li class="treeview 
    {{request()->is('Reporte/*') ? 'active' : ''}}
    {{request()->is('Reportefiltro') ? 'active' : ''}}
    {{request()->is('home') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('Reporte/4') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','4') }}">
            <i class="fa fa-money"></i>Preescolar</a>
        </li>
        <li {{request()->is('Reporte/1') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','1') }}">
            <i class="fa fa-money"></i>Primaria</a>
        </li>
        <li {{request()->is('Reporte/2') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','2') }}">
            <i class="fa fa-money"></i>Secundaria</a>
        </li>
        <li {{request()->is('Reporte/3') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','3') }}">
            <i class="fa fa-money"></i>Bachillerato</a>
        </li>
        <li {{request()->is('Reporte/6') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','6') }}">
            <i class="fa fa-money"></i>Formacion</a>
        </li>
        <li {{request()->is('Reporte/5') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','5') }}">
            <i class="fa fa-money"></i>CGA</a>
        </li>
        <li {{request()->is('Reporte/7') ? 'class=active' : ''}}>
          <a href="{{ route('reportes','7') }}">
            <i class="fa fa-money"></i>CyV</a>
        </li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>

      @endif
    </li>   
<!-- ---------------------- Supervisor_Prescolar ---------------------------------------> 
{{ $r=auth()->user()->hasRole('Supervisor_Prescolar')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Preescolar</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li>  

<!-- ---------------------- Supervisor_Primaria --------------------------------------->  
{{ $r=auth()->user()->hasRole('Supervisor_Primaria')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Primaria</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li> 

<!-- ---------------------- Supervisor_Secundaria --------------------------------------->  
{{ $r=auth()->user()->hasRole('Supervisor_Secundaria')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Secundaria</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li> 

<!-- ---------------------- Supervisor_Bachillerato  ---------------------------------------> 
{{ $r=auth()->user()->hasRole('Supervisor_Bachillerato')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Bachillerato</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li>

    <!-- ---------------------- Supervisor_CGA ---------------------------------------> 
{{ $r=auth()->user()->hasRole('Supervisor_CGA')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>CGA</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li> 
        <!-- ---------------------- Supervisor_FI ---------------------------------------> 
{{ $r=auth()->user()->hasRole('Supervisor_FI')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Formación Ignaciana</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li> 
            <!-- ---------------------- Supervisor_CyV ---------------------------------------> 
{{ $r=auth()->user()->hasRole('Supervisor_CyV')}}
@if(  $r )
    <li class="treeview 
    {{request()->is('home') ? 'active' : ''}}
    {{request()->is('pre') ? 'active' : ''}}
    {{request()->is('presec') ? 'active' : ''}}
    ">

      <a href="#"><i class="fa fa-clipboard"></i> <span>Reportes </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu ">
        <li {{request()->is('pre') ? 'class=active' : ''}}
          {{request()->is('presec') ? 'class=active' : ''}}>
          <a href="{{ route('reportes.pre') }}">
            <i class="fa fa-money"></i>Comunicación y Vinculación</a></li>
      </ul>
      <li {{request()->is('coment/*') ? 'class=active' : ''}}><a href="{{ route('coment.create') }}"><i class="fa fa-comment-o"></i>Comentarios</a></li>
      <li ><a href="{{asset('doc/Manual.pdf')}}" target="_blank"><i class="fa fa-book"></i>Manual</a></li>
      @endif
    </li> 

        
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>  -->