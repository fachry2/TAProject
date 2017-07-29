@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header" align="center">
        <h2>DAFTAR DI FURNITURE ONLINE</h2>
        <p class="lead">Sudah punya akun ? Masuk <a href="{{ route('login') }}">di sini</a></p>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel-body">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required  placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Kata Sandi (Min 6 Karakter)">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Konfirmasi Kata Sandi">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary-daftar" style="width: 100%">
                                Daftar Akun
                            </button>
                        </div>
                    </div>
                    <hr width="100%">
                </form>
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
    </div>
</div>
@endsection
