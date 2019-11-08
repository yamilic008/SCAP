@extends('layouts.master')

@section('css')
@endsection

@section('content')

<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Usuario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('accion.store') }}">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Clave</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="clave" value="{{ old('name') }}" required autofocus>

                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="nombre" class="col-md-4 control-label">Nombre de la Linea de Acción</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ old('name') }}" required autofocus>

                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Prioridad</label>
                    <div class="col-md-6">
                         <select class="form-control" name="prioridad">
                        @foreach($prioridad as $prioridad)
                              <option  value="{{$prioridad->id}}">{{$prioridad->nombre}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                        </div>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
    
</div>

                   


@endsection

@section('js')
@endsection
