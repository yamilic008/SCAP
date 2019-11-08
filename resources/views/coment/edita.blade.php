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
                <h3 class="box-title">Comentario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{route('coment.update',$dato['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Usuario</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $dato->user->name }} " required autofocus readonly="readonly">

                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Correo</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $dato->user->email }} " required autofocus readonly="readonly">

                    
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Titulo</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $dato->titulo }} " required autofocus readonly="readonly">

                    
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Comentario</label>

                    <div class="col-md-6">
                        <textarea  id="name" type="text" class="form-control" name="nombre"  required autofocus readonly="readonly">{{ $dato->comentario }} </textarea>

                    
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Fecha</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ $dato->created_at }} " required autofocus readonly="readonly">

                    
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Estado</label>
                    <div class="col-md-6">
                         <select class="form-control " name="estado"  required autofocus  >
                                <option value="Pendiente" {{$dato->estado === 'Pendiente' ? 'selected' : ' ' }}>Pendiente </option>
                                <option value="Rechazado" {{$dato->estado === 'Rechazado' ? 'selected' : ' ' }}>Rechazado </option>
                                <option value="Atendido" {{$dato->estado === 'Atendido' ? 'selected' : ' ' }}>Atendido </option>
                            </select> 
                    </div>
                </div>

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


@endsection

@push('script')

@endpush
