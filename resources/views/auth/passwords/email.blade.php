@extends('layouts.log')

@section('content')

<div class="container">
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{asset('img/logo.png')}}" > <br>
    <a href="/"><b>{{ config('app.name', 'Laravel')}}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Recuperacion de Contraseña</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    <form method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }} 
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo">
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-success btn-block btn-flat">Enviar link de reinicio</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>

</div>
</div>
@endsection