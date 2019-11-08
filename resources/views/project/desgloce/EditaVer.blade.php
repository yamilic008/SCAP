@extends('layouts.master')

@section('css')


@endsection

@push('style')
<script>
function sumar() 
{
    var c1 = document.getElementById('inlineRadio1').checked; 
    var c2 = document.getElementById('inlineRadio2').checked; 
    var n1 = parseInt(document.MyForm.cantidad.value);
    var n2 = parseInt(document.MyForm.prcio.value);
    if (c1==true)
    {
        document.MyForm.resultado.value=n1*n2;
    }
    if (c2==true)
    {
        document.MyForm.resultado.value=n1*n2*1.16;
    }

}
</script>
@endpush

@section('content')

<div class="row">


    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Articulo </h3>
            </div>

            <form name="MyForm" class="form-horizontal" method="POST" action="{{ route('desgloce.update',$dato['id']) }}"  >
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Cuenta Contable</label>
                    <div class="col-md-6">
                         <select class="form-control" name="ccontable"  required autofocus  disabled>
                            <option value="">Selecciona una Centro de Costos</option>
                        @foreach($seccion as $seccion)
                              <option  value="{{$seccion->id}}" {{ $seccion->id === $dato->ccontable_id ? 'selected' : ' ' }}>{{$seccion->CuentaContable}}- {{$seccion->cuentas->nombre}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Cantidad</label>
                    <div class="col-md-1">
                        <input id="name" type="number" class="form-control" name="cantidad" value="{{ $dato->cantidad }}" required autofocus onChange="sumar()" min="0" step="0.1"  disabled>
                        <input id="name" type="hidden" name="actividad_id" value="{{ $actividad->id }}" >
                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Recurso</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="recurso" value="{{ $dato->recurso }}" required autofocus  disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Proveedor</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="proveedor" value="{{ $dato->proveedor }}" required autofocus  disabled>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Precio</label>
                    <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input  type="number" class="form-control" id="exampleInputAmount" name="prcio" placeholder="" onChange="sumar()" value="{{$dato->precio}}" required autofocus  disabled>
                      <div class="input-group-addon">.00</div>
                    </div>
                </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">¿Este precio incluye IVA?</label>
                    <div class="col-md-6">
                        <label class="radio-inline">
                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="si" name="iva" required onChange="sumar()"  disabled> Si
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" name="iva" onChange="sumar()"  disabled>  No
                        </label>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Total</label>
                    <div class="col-md-2">
                    <div class="input-group">
                      <div class="input-group-addon">$</div>
                      <input  type="number" class="form-control" id="exampleInputAmount" name="resultado" placeholder="" value="{{$dato->Total}}"  required autofocus  disabled>
                      <div class="input-group-addon">.00</div>
                    </div>
                </div>
                </div>
                
</form>
                
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{ URL::previous()}}" >
                            <button type="button" class="btn btn-primary">Regresar</button>
                            </a>
                        </div>
                    </div>
                </div>
               
            
        </div>
    </div>

    
</div>

                   


@endsection

@push('script')

@endpush
