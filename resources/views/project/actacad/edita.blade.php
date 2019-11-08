@extends('layouts.master')
@push('style')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('browser_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('browser_components/daterange/dist/daterangepicker.min.css')}}">
@endpush

@section('content')
 


<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Usuario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{route('actacad.update',$dato['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Nombre la actividad Academica</label>

                    <div class="col-md-6">
                        <input id="name" type="hidden" name="user_id" value="{{ $idusuario }}" >
                        <input id="name" type="hidden" name="total" value="{{$dato->total}}" >
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $dato->nombre }} " required autofocus {{$vista}}>

                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Centro de Costos</label>
                    <div class="col-md-6">
                         <select class="form-control" name="ccostos"   autofocus {{$vista}}>
                            <option value="">Selecciona una Centro de Costos</option>
                        @foreach($seccion as $seccion)
                            <option  value="{{$seccion->id}}" {{ $seccion->id === $dato->seccions_id ? 'selected' : ' ' }}>
                                {{$seccion->nombre}}
                            </option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Prioridad</label>
                    <div class="col-md-6">
                         <select class="form-control" name="prioridad" id="prioridad"  autofocus {{$vista}}>
                            <option value="">Selecciona una Prioridad</option>
                        @foreach($prioridad as $prioridad)
                            <option  value="{{$prioridad->id}}" {{ $prioridad->id === $dato->prioridads_id ? 'selected' : ' ' }}>
                                {{$prioridad->nombre}}
                            </option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Linea de Accion</label>
                    <div class="col-md-6">
                         <select class="form-control" name="linea" id="linea" required autofocus {{$vista}}>
                              <option  value="{{ $dato->linea_accion_id !== null ? $dato->linea_accion_id : ' ' }}" > 
                                @foreach($linea as $li)
                                    {{ $li->id === $dato->linea_accion_id ? $li->nombre : ' ' }}
                                @endforeach
                            </option>
                        </select> 
                        
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Gestion</label>
                    <div class="col-md-6">
                         <select class="form-control" name="gestion" id="gestion"  autofocus {{$vista}}>
                            <option value="">Selecciona una Gestion</option>
                        @foreach($gestion as $gestion)
                              <option  value="{{$gestion->id}}" {{ $gestion->id === $dato->gestions_id ? 'selected' : ' ' }}>{{$gestion->nombre}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                    <label for="descripcion" class="col-md-4 control-label" >Area</label>
                    <div class="col-md-6">
                         <select class="form-control" name="area" id="area" required autofocus {{$vista}}>
                              <option  value="{{ $dato->area_id !== null ? $dato->area_id : ' ' }}"> 
                                @foreach($area as $area)
                                    {{ $area->id === $dato->area_id ? $area->nombre : ' ' }}
                                @endforeach
                            </option>
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Descripcion</label>
                    <div class="col-md-6">
                         <textarea class="form-control" rows="4" cols="50" name="descripcion"  required autofocus placeholder="Introduce la descripcion aqui......" value="" {{$vista}}>{{$dato->descripcion}}</textarea>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Objetivo</label>
                    <div class="col-md-6">
                         <textarea class="form-control" rows="4" cols="50" name="objetivo"  required autofocus placeholder="Introduce la observacion aqui......" {{$vista}}>{{$dato->objetivo}}</textarea>
                    </div>
                </div>
              @if($now>$dato->fechafin && $dato->estado === 'Aprobado')

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Observaciones</label>
                    <div class="col-md-6">
                         <textarea class="form-control" rows="4" cols="50" name="observacion"  required autofocus placeholder="Introduce la observacion aqui......">{{$dato->observacion}} </textarea>
                    </div>
                </div>
              @endif
<!-- ---------------------------------------------------------------- -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Fechas de Actividad</label>
                    <div class="col-md-6">
                        <div class="input-group">
                           <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div> 
                          <span id="two-inputs"><input id="date-range200" size="20" value="{{$dato->fechainicio}}" name="fechainicio" required autofocus {{$vista}} placeholder="Fecha inicio" > <b>a</b><input id="date-range201" size="20" value="{{$dato->fechafin}}" name="fechafin" required autofocus placeholder="Fecha Fin" ></span>
                        </div>
                    </div>
                </div>

   <!-- -------------------------------------------------------------------- -->             
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar
                            </button>
                        </div>
                    </div>
                </div>

          </form>
        </div>
    </div>
    
</div>
<div class="col-md-4">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Ayuda:</b> Prioridades y lineas de accion</h3>
            </div>
            <div class="box-body">
                <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        FORMACIÓN INTEGRAL
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                        <b>Padres de Familia y Formación para Adultos:</b> <br> Programa ampliado que le aporte mayores herramientas a los padres de familia para el acompañamiento de sus hijos. <br> <br>

                        <b> Modelo Educativo Ignaciano (Liderazgo y ESpiritualidad):</b> <br> Constante formación de la comunidad educativa que favorezca la apropiación del Modelo Educativo Ignaciano. <br> <br>

                        <b> Deportes, Arte y Cultura:</b><br> Integración de las acciones de deporte, arte y cultura como un eje transversal en la formación integral de los alumnos. <br> <br>

                        <b> Dimensión Global:</b><br> Refiere al desarrollo de competencias que forman a la persona para hacerlo competitivo como ciudadano del mundo, responsable y activo, capaz de aprovechar los avances tecnológicos y las múltiples posibilidades que permite la globalidad.
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        CALIDAD HUMANA, PROFESIONAL Y ACADÉMICA
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                        <b>Idioma:</b> <br> Fortalecimiento del área a partir de la implementación de mecanismos certificadores nacionales e internacionales, así como el mejoramiento de la infraestructura propia. <br> <br>

                        <b>Retención de Alumnos:</b> <br> Mecanismos de seguimiento académico y retención de alumnos para disminuir el índice de deserción.<br> <br>

                        <b>Innovación Educativa:</b> <br> Desarrollo de estrategias innovadoras que fortalezcan el proceso de enseñanza-aprendizaje bajo el sustento del modelo educativo.<br> <br>

                        <b>Capacitación y Formación al Personal:</b> <br> Programa de formación que permita el desarrollo humano y profesional del personal directivo, académico, administrativo y de servicios.<br> <br>

                        <b>Tecnología Educativa (TIC's):</b> <br> Desarrollo de metodologías y aplicaciones tecnológicas que faciliten la actualización del proceso de enseñanza-aprendizaje.
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        FORTALECIMIENTO INSTITUCIONAL
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                        <b>Sistema de Calidad:</b> <br>  Mecanismo que permite la medición de las acciones operativas del colegio con base en sistemas de calidad nacionales e internacionales. <br> <br>

                        <b>Actualización normativa y de procesos: </b> <br> Elaboración y documentación de todos los procedimientos operativos, administrativos y académicos del colegio.<br> <br>

                        <b>Planeación Institucional: </b> <br> Mecanismos institucionales que permiten la gestión y operación del colegio, a través de indicadores para el seguimiento de los objetivos de las diferentes áreas.<br> <br>

                        <b>Responsabilidad Social:</b><br> Emprender un modelo de gestión basado en las normas nacionales de responsabilidad social para las organizaciones, haciendo énfasis en la ética organizacional, la vinculación con los sectores estratégicos, la calidad de vida de nuestros colaboradores y el cuidado de nuestro medio ambiente.
                    </div>
                  </div>
                </div>
                <div class="panel box box-info">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFor">
                        COMUNICACIÓN Y PROMOCIÓN
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFor" class="panel-collapse collapse">
                    <div class="box-body">
                        <b> Comunicación Institucional:</b> <br> Estrategias que permitan al interior tener una comunidad educativa más informada y hacia el exterior, la difusión de las actividades sustantivas que dan posicionamiento al colegio en la región. <br><br>

                        <b>Mercadotecnia:</b> <br> Plan de promoción y publicidad que permita el aumento en la captación de alumnos. <br> <br>

                        <b>Exalumnos:</b><br> Estrategias que permitan tener estrecha comunicación con los exalumnos del colegio.
                    </div>
                  </div>
                </div>
                <div class="panel box box-warning">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                        GESTIÓN ADMINISTRATIVA
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse">
                    <div class="box-body">
                        <b>Administración de la Institución:</b> <br> Capacidad de asegurar el ingeso de los recursos financieros estables y suficientes en el corto y largo plazo y distribuirlos en tiempo y forma apropiada para cubrir los costos totales  del mantenimiento y conservación de la institución.<br><br>

                        <b>Infraestructura y planta física:</b><br> Desarrollo y equipamiento de espacios necesarios para llevar a cabo las actividades académicas, educativas y administrativas con calidad. <br><br>

                        <b>Gestión de Recursos Humanos: </b><br> Procedimientos que permitan la retención del talento y la óptima selección de candidatos con el objetivo de crear un clima organizacional positivo y elevar el sentido de pertenencia. <br><br>

                        <b>Fuentes Alternas de Ingreso: </b><br> Mecanismos que permitan la diversificación en la captación de los ingresos.
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>

@endsection

@push('script')
<script src="{{asset('browser_components/moment/min/moment.min.js')}} "></script>
<script src="{{asset('browser_components/daterange/dist/jquery.daterangepicker.min.js')}} "></script>

    <script >
        //afecta al id=prioridad y cambia el id=linea
        $('#prioridad').on('change',function(){
            var prioridad_id = $(this).val();

            if(!prioridad_id)
            {
                $('#linea').html('<option value="">Selecciona un Nivel</option>');
                return;
            }
            //con esto probamos si esta tomando los valores en la variable
            //alert(prioridad_id);

            //AJAX
            $.get('../../api/actacad/prioridad/'+prioridad_id+'', function(data){
                //console.log(data);
                var html_select = '<option value="">Selecciona un Nivel</option>';
                    for (var i=0; i<data.length; ++i)
                    {
                        html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
                        //console.log(html_select);
                        $('#linea').html(html_select);
                    }
            });
        });

        //afecta al id=prioridad y cambia el id=linea
        $('#gestion').on('change',function(){
            var gestion_id = $(this).val();

            if(!gestion_id)
            {
                $('#area').html('<option value="">Selecciona un Nivel</option>');
                return;
            }
            //con esto probamos si esta tomando los valores en la variable
            //alert(prioridad_id);

            //AJAX
            $.get('../../api/actacad/area/'+gestion_id+'', function(data){
                //console.log(data);
                var html_select = '<option value="">Selecciona un Nivel</option>';
                    for (var i=0; i<data.length; ++i)
                    {
                        html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>';
                        //console.log(html_select);
                        $('#area').html(html_select);
                    }
            });
        });
        

    </script>
    <script>
       $('#two-inputs').dateRangePicker(
    {
        separator : ' to ',
        getValue: function()
        {
            if ($('#date-range200').val() && $('#date-range201').val() )
                return $('#date-range200').val() + ' to ' + $('#date-range201').val();
            else
                return '';
        },
        setValue: function(s,s1,s2)
        {
            $('#date-range200').val(s1);
            $('#date-range201').val(s2);
        }
    });
    </script>
@endpush
