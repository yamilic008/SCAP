@extends('layouts.master')

@section('content')
 


<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Usuario</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{route('ccontable.update',$dato['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Cuenta Contable</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="ccontable" value="{{$dato->CuentaContable}}{{ old('name') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Seccion</label>
                        <div class="col-md-6">
                            
                            <select class="form-control" name="seccion" required>
                                <!-- <option  value=""> Selecciona una opcion</option> -->
                            @foreach($seccions as $seccions)
                                <option  value="{{$seccions->id}}" {{ $seccions->id === $dato->seccions_id ? 'selected' : ' ' }}  >    
                                   {{$seccions->nombre}}
                                </option>
                            @endforeach
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Cuenta</label>
                        <div class="col-md-6">
                            
                            <select class="form-control" name="cuenta" required>
                                <!-- <option  value=""> Selecciona una opcion</option> -->
                            @foreach($cuentas as $cuentas)
                                <option  value="{{$cuentas->id}}" {{ $cuentas->id === $dato->cuentas_id ? 'selected' : ' ' }}  >    
                                   {{$cuentas->nombre}}
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