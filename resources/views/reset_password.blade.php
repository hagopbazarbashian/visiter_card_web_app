@extends('layout.app')
@section('title'){{ 'Login' }}@endsection
@section('home')
<div class="vh-100" style="background: url('{{ asset('assets/images/pages/IMG_7349.jpg') }}'); background-size: cover; background-repeat: no-repeat; position: relative;min-height:500px">
    <div class="container">
      <div class="row justify-content-center align-items-center height-self-center vh-100">
          <div class="col-lg-5 col-md-12 align-self-center">
              <div class="user-login-card bg-body">
                  <p>
                      Please enter your email address. You will receive a link to create a new password via email.
                  </p>
                  <form action="{{route('reset_password_now')}}" method="post">
                    @csrf
                      <div class="mb-5">
                          <label class="text-white fw-500 mb-2">Username or Email Address</label>
                          <input type="text" name="email" class="form-control rounded-0">
                      </div>
                      <div class="iq-button">
                        <button type="submit" class="btn text-uppercase position-relative">
                             <span class="button-text">Get new password</span>
                             <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                      <div class="seperator d-flex justify-content-center align-items-center">
                          <span class="line"></span>
                      </div>
                      <div class="iq-button">
                          <a href="{{route('welcome')}}" class="btn text-uppercase position-relative">
                              <span class="button-text">log in</span>
                              <i class="fa-solid fa-play"></i>
                          </a>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection
