@extends('layouts.master')

@section('css')


@endsection

@push('style')

@endpush

@section('content')

<div class="row" >


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Articulo</h3>
            </div>
@if($actividad->estado == 'Pendiente' || $actividad->estado == 'No Aprobado' )
                            

            <form name="MyForm" class="form-horizontal" method="POST" action="{{ route('desgloce.update',$dato['id']) }}"  >
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Cuenta Contable</label>
                    <div class="col-md-6">
                         <select class="form-control" name="ccontable"  required autofocus>
                            <option value="">Selecciona una Centro de Costos</option>
                        @foreach($seccion as $seccion)
                              <option  value="{{$seccion->id}}" {{ $seccion->id === $dato->ccontable_id ? 'selected' : ' ' }}>{{$seccion->CuentaContable}}- {{$seccion->cuentas->nombre}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Cantidad</label>
                    <div class="col-md-4">
                        <input id="name" type="number" class="form-control" name="cantidad" value="{{ $dato->cantidad }}" required autofocus onChange="sumar()" min="0" step="0.1">
                        <input id="name" type="hidden" name="actividad_id" value="{{ $actividad->id }}" >
                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Recurso</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="recurso" value="{{ $dato->recurso }}" required autofocus>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Proveedor</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="proveedor" value="{{ $dato->proveedor }}" required autofocus>
                    </div>
                </div>
<!--                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="clave" class="col-md-4 control-label">Precio</label>
    <div class="col-md-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input  type="number" class="form-control" id="exampleInputAmount" name="prcio" placeholder="" onChange="sumar()" value="{{$dato->precio}}" required autofocus >
      <div class="input-group-addon">.00</div>
    </div>
</div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="clave" class="col-md-4 control-label">¿Este precio incluye IVA?</label>
    <div class="col-md-6">
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="si" name="iva" required onChange="sumar()" > Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" name="iva" onChange="sumar()"> No
        </label>
    </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="clave" class="col-md-4 control-label">Total</label>
    <div class="col-md-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input  type="number" class="form-control" id="exampleInputAmount" name="resultado" placeholder="" value="{{$dato->Total}}"  required autofocus readonly="readonly">
      <div class="input-group-addon">.00</div>
    </div>
</div>
</div> -->



                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label">Precio</label>
                        <div class="col-md-4">
                        <div class="input-group">
                          <div class="input-group-addon">$</div>
                          <input  type="number" class="form-control" id="precio" name="precio" placeholder="" onChange="sumar()" value="{{$dato->precio}}"  autofocus step="any" >
                          
                        </div>
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label">Total</label>
                        <div class="col-md-4">
                            <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input  type="number" class="form-control" id="exampleInputAmount" name="total" placeholder="0" value="{{$dato->Total}}" autofocus readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label"><!-- ¿Este precio incluye IVA? --></label>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                      <input type="checkbox" id="checkiva" onChange="sumar()">
                                      El Precio Incluye <b> IVA</b>
                                </label>
                                <input  type="hidden" class="form-control" id="id" name="iva" placeholder="0" value="0" autofocus readonly="readonly">
                            </div>
                        </div>
                    </div>
                

                
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Modificar
                            </button>
                        </div>
                    </div>
                </div>
               
            </form>
@endif
@if($actividad->estado == 'Aprobado')

    <form name="MyForm" class="form-horizontal" method="POST" action="{{ route('desgloce.update',$dato['id']) }}"  >
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Cuenta Contable</label>
                    <div class="col-md-6">
                         <select class="form-control" name="ccontable"  required autofocus disabled>
                            <option value="">Selecciona una Centro de Costos</option>
                        @foreach($seccion as $seccion)
                              <option  value="{{$seccion->id}}" {{ $seccion->id === $dato->ccontable_id ? 'selected' : ' ' }}  >{{$seccion->CuentaContable}}- {{$seccion->cuentas->nombre}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Cantidad</label>
                    <div class="col-md-4">
                        <input id="name" type="number" class="form-control" name="cantidad" value="{{ $dato->cantidad }}" required autofocus onChange="sumar()" min="0" step="0.1" disabled>
                        <input id="name" type="hidden" name="actividad_id" value="{{ $actividad->id }}" >
                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Recurso</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="recurso" value="{{ $dato->recurso }}" required autofocus disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Proveedor</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="proveedor" value="{{ $dato->proveedor }}" required autofocus disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label">Precio</label>
                        <div class="col-md-4">
                        <div class="input-group">
                          <div class="input-group-addon">$</div>
                          <input  type="number" class="form-control" id="precio" name="precio" placeholder="" onChange="sumar()" value="{{$dato->precio}}"  autofocus step="any" disabled>
                          
                        </div>
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label">Total</label>
                        <div class="col-md-4">
                            <div class="input-group">
                              <div class="input-group-addon">$</div>
                              <input  type="number" class="form-control" id="exampleInputAmount" name="total" placeholder="0" value="{{$dato->Total}}" autofocus readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label"><!-- ¿Este precio incluye IVA? --></label>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                      <input type="checkbox" id="checkiva" onChange="sumar()" disabled>
                                      El Precio Incluye <b> IVA</b>
                                </label>
                                <input  type="hidden" class="form-control" id="id" name="iva" placeholder="0" value="0" autofocus readonly="readonly" disabled>
                            </div>
                        </div>
                    </div>
                

                
                
               
            </form>
           

@endif
        </div>
    </div>
   

    
</div>
 <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><b>Ayuda:</b> Conceptos Cuentas Contables</h3>
            </div>
            <div class="box-body">
                <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        CUENTAS CONTABLES
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                         @foreach($cuenta as $cuenta)
                              <b>{{$cuenta->nombre}}:</b> <br> {{$cuenta->descripcion}}<br> 
                        @endforeach
                    </div>
                  </div>
                </div>
                
                
                
               
              </div>
            </div>
        </div>
</div>

                   


@endsection

@push('script')
<script>
    //esta funcion verifica el check box en caso de que la operacion cohincida
$(function() {
  // Declara variables
    var n1 = parseFloat(document.MyForm.cantidad.value);
    var n2 = parseFloat(document.MyForm.precio.value);
    var verificar = parseFloat(document.MyForm.total.value);

    if (verificar == (n1*n2))
    {
        
        document.getElementById("checkiva").checked = true;
    }
    else
    {
        document.getElementById("checkiva").checked = false;
    }



  
  
  
 
});
function sumar() 
{
/*    var c1 = document.getElementById('inlineRadio1').checked; 
    var c2 = document.getElementById('inlineRadio2').checked; */
    var c3 = document.getElementById('checkiva').checked;
    var n1 = parseFloat(document.MyForm.cantidad.value);
    var n2 = parseFloat(document.MyForm.precio.value);
    
    
    if (c3==true)
    {
        var total = document.MyForm.total.value=n1*n2;

        document.MyForm.iva.value= total-(total/1.16);
        
    }
     if (c3==false)
     {
        var total = document.MyForm.total.value=n1*n2*1.16;

        document.MyForm.iva.value= total-(total/1.16);
     }


}


</script>

@endpush
