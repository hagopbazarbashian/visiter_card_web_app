@extends('layout.app')
@section('title'){{ 'Register' }}@endsection
@section('home')
<div class="vh-100" style="background: url('{{ asset('assets/images/pages/IMG_7349.jpg') }}'); background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <div class="container">
       <div class="row justify-content-center align-items-center height-self-center vh-100">
          <div class="col-lg-8 col-md-12 align-self-center">
             <form action="{{ route('resetpassword_user_submit',[$User->token,$User->email]) }}" method="post">
               @csrf
                <div class="user-login-card bg-body">
                   <h4 class="text-center mb-5">Reset Password</h4>
                   <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                      <div class="col">
                         <label class="text-white fw-500 mb-2">Password *</label>
                         <input type="password" name="password" class="form-control rounded-0" value="{{ old('password') }}" />
                      </div>
                      <div class="col">
                         <label class="text-white fw-500 mb-2">Confirm Password *</label>
                         <input type="password" name="re-password" class="form-control rounded-0" value="{{ old('re-password') }}" />
                      </div>
                   </div><br>
                   <div class="row text-center">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                         <div class="full-button">
                            <div class="iq-button">
                               <button type="submit" class="btn text-uppercase position-relative">
                                  <span class="button-text">Reset You Password</span>
                                  <i class="fa-solid fa-play"></i>
                               </button>
                            </div>
                            <p class="mt-2 mb-0 fw-normal">Already have an account?<a href="{{ route('welcome') }}" class="ms-1">Login</a></p>
                         </div>
                      </div>
                      <div class="col-lg-3"></div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
@endsection
