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
    <p class="login-box-msg">Nueva Contraseña</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


    <form method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }} 

    <input type="hidden" name="token" value="{{ $token }}">

      <div class="form-group has-feedback">
         <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Correo">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>


    <div class="form-group has-feedback">
       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Password">
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>    

      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-success btn-block btn-flat">Reiniciar Password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>

</div>
</div>
@endsection
