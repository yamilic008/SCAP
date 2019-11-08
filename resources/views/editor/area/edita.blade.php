@extends('layouts.master')

@section('content')
 


<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Usuario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{route('area.update',$dato['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Cuenta Contable</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="nombre" value="{{$dato->nombre}}{{ old('name') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Cuenta</label>
                        <div class="col-md-6">
                            
                            <select class="form-control" name="gestion" required>
                                <!-- <option  value=""> Selecciona una opcion</option> -->
                            @foreach($gestion as $gestion)
                                <option  value="{{$gestion->id}}" {{ $gestion->id === $dato->cuenta_id ? 'selected' : ' ' }}  >    
                                   {{$gestion->nombre}}
                                </option>
                            @endforeach
                            </select> 
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