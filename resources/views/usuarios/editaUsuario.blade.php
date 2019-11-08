@extends('layouts.master')

@section('content')
 


<div class="row">


    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Usuario</h3>
            </div>
@if(auth()->user()->hasRole('Super_Usuario'))
            <form class="form-horizontal" method="POST" action="{{route('usuario.update',$users['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail </label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('password.request') }}" class="btn btn-warning btn-block" role="button" aria-pressed="true">Restablecer Contraseña</a>

                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"></label>

@endif
@if(!auth()->user()->hasRole('Super_Usuario'))
            <form class="form-horizontal" method="POST" action="{{route('usuario.update',$users['id'])}}">
                {{ csrf_field() }}{{method_field('PUT')}}
                <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail </label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}{{ old('email') }}" required readonly="readonly">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-md-4">
                    </div>
                   <!--  <div class="col-md-6">
                       <a href="{{ route('password.request') }}" class="btn btn-warning btn-block" role="button" aria-pressed="true">Restablecer Contraseña</a>
                   
                   </div> -->
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label"></label>
                    
@endif
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-block">Actualizar</button>
                    </div>
                </div>
                
                </div>
            

        </div>
    </div>
@if(auth()->user()->hasRole('Super_Usuario'))            
    <div class="col-md-4">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Roles</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
           <div class="box-body">
                <div class="form-group">
                    @foreach($roles as $id=>$name)
                        <input name="roles[]"  value="{{$id}}" type="radio" {{$users->roles->contains($id) ? 'checked':''}}>{{$name}} <br>
                    @endforeach
                
                </div>
            </div>
                
        </div>
    </div>
@endif
@if(!auth()->user()->hasRole('Super_Usuario'))            
    <div class="col-md-4"style="display:none;">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Roles</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
           <div class="box-body">
                <div class="form-group">
                    @foreach($roles as $id=>$name)
                        <input name="roles[]"  value="{{$id}}" type="radio" {{$users->roles->contains($id) ? 'checked':''}} style="display:none;">{{$name}} <br>
                    @endforeach
                
                </div>
            </div>
                
        </div>
    </div>
@endif
            </form>
</div>

@endsection