@extends('layouts.master')

@section('content')
 


<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Usuario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{route('prioridad.update',$users['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nombre de la Gestion/Direccion</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="clave" value="{{$users->clave}}{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nombre de la Gestion/Direccion</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="nombre" value="{{$users->nombre}}{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nombre de la Gestion/Direccion</label>

                        <div class="col-md-6">
                            
                            <textarea rows="4" cols="50" id="name" class="form-control" name="descripcion"  required autofocus>{{$users->descripcion}}
                            </textarea>
                        </div>
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