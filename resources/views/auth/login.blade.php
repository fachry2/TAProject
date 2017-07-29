@extends('layouts.app')

@section('content')
<div class="container">
     <div class="page-header" align="center">
        <h2>MASUK DI FURNITURE ONLINE</h2>
        <p class="lead">Belum punya akun ? Daftar <a href="{{ route('register') }}">di sini</a></p>
      </div>
      <div class="col-md-6 col-md-offset-3">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus aria-describedby="basic-addon1">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <!--<strong>{{ $errors->first('email') }}</strong>-->
                                <strong>Email / Password yang Anda masukkan salah.</strong> 
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required aria-describedby="basic-addon1">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat saya
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">
                            Masuk
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Lupa Kata Sandi?
                        </a>
                    </div>
                </div>
            </form>
            <hr width="100%">
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" style="margin-bottom:10px; width:100%">
                Facebook
            </button>
            <button type="submit" class="btn btn-danger" style="width:100%">
                Google
            </button>
        </div>
    </div>
    <!--
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
            </div>
        </div>
        -->
</div>
@endsection
