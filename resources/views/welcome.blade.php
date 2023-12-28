@extends('layout.app')
@section('title'){{ 'Login' }}@endsection
@section('home')
<div class="vh-100"  style="background-color:black; background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px">
<div class="container">
    <div class="row justify-content-center align-items-center height-self-center vh-100">
        <div class="col-lg-5 col-md-12 align-self-center">
            <div class="user-login-card bg-body">
                <div class="text-center">
                    <!--Logo -->
                    <div class="logo-default">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo log" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            <p style="color:#fff">ALWAYS IN TOUCH</p>
                        </a>
                    </div>
                </div>
                <div align="center">
                  <a class="bt" href="{{ route('register_user') }}">Sign Up</a>
                </div>
                <br>
                <div align="center">
                 -or-
                </div><br>
                <div align="center">
                    <a class="bt" href="{{ route('login_user') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div><br><br><br>
@endsection
