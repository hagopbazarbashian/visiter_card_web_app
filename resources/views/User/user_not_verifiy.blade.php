
@extends('layout.app')
@section('title'){{ 'Welcome User' }}@endsection
@section('home')
<div class="section-padding vh-100">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <img src="./assets/images/pages/404.webp" class="" alt="404" loading="lazy">
        <div class="py-3 text-center mt-5 mb-4" style="background: url('./assets/images/pages/404-bg-patten.webp'); background-repeat: no-repeat; background-position: center center; background-size: 68% auto;">
          <h4 class="fw-semibold mb-0">Oops! something went wrong</h4>
        </div>
        <p class="text-center">Please wait for the page to be verified by the admin</p>
        <div class="text-center mt-4 pt-3">
          <div class="iq-button">
              <a href="#" class="btn text-uppercase position-relative">
                  <span class="button-text">please wait for permission</span>
                  <i class="fa-solid fa-play"></i>
              </a>
          </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
</div>
@endsection


