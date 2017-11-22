@extends('layouts.app')
@section('title', 'SchoolTask')
@section('content')

<div class="container">

    <div class="omb_login">
        <h3 class="omb_authTitle">Login or <a href="{{ route('register') }}">Sign up</a></h3>
        <div class="row omb_row-sm-offset-3 omb_socialButtons">
            <div class="col-xs-6 col-sm-3">
                <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-lg btn-block omb_btn-facebook">
                    <i class="fa fa-facebook visible-xs"></i>
                    <span class="hidden-xs">Facebook</span>
                </a>
            </div>
            <div class="col-xs-6 col-sm-3">
                <a href="{{ route('social.auth', 'twitter') }}" class="btn btn-lg btn-block omb_btn-twitter">
                    <i class="fa fa-twitter visible-xs"></i>
                    <span class="hidden-xs">Twitter</span>
                </a>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3 omb_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="omb_hrOr">
                <span class="omb_spanOr">or</span>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="omb_loginForm" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="email" type="email" placeholder="email address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input  placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                    <div class="row omb_row-sm-offset-3">
                        <div class="col-xs-12 col-sm-3">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" value="remember-me" {{ old('remember') ? 'checked' : '' }}>Remember Me
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <p class="omb_forgotPwd">
                                <a href="{{ route('password.request') }}">Forgot password?</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
