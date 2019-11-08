@extends('layouts.master')

@section('css')
@endsection

@section('content')

<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Cuenta</h3>
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('cuenta.store') }}">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="clave" class="col-md-4 control-label">Nombre de la Cuenta</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="nombre" value="{{ old('name') }}" required autofocus>
 
                    
                    </div>
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="descripcion" class="col-md-4 control-label">Descripcion</label>

                    <div class="col-md-6">
                        <!-- <textarea rows="4" cols="50" id="name" type="text" class="form-control" name="descripcion"  required autofocus>
                        </textarea> -->
                        <textarea class="form-control"  rows="4" cols="50" name="descripcion" required>
</textarea>
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
