@extends('layouts.master')

@section('css')
@endsection

@push('style')
  <!-- daterange picker -->
@endpush

@section('content')

<div class="row">
 

    <div class="col-md-6">
<!-- Alerta comentario -->
        @if($enviado == 1)
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Mensaje Enviado!</h4>
            Gracias por enviar tus comentarios .
          </div>
        @endif
<!-- Alerta comentario -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Comentarios</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('coment.store') }}" id="form">
                {{ csrf_field() }}
                <div class="box-body">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Titulo</label>
                    <div class="col-md-6">
                         <input type="hidden" name="user" value="{{ $idusuario}}">
                         <input class="form-control" type="text" name="titulo" form="form" required autofocus placeholder="Introduce la descripcion aqui......"></input>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Observacion</label>
                    <div class="col-md-6">
                         <textarea class="form-control" rows="4" cols="50" name="comentario" form="form" required autofocus placeholder="Introduce la observacion aqui......"></textarea>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Enviar
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
