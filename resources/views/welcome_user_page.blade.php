@extends('layout.app')
@section('title'){{ 'Wecom-User' }}@endsection
@section('home')
<div class="section-padding vh-100">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8"> 
            <h2 class="welcome">Welcome</h2>
          <p class="text-center">Get your first card</p>
          <a href="{{ route('get_card') }}">
            <div class="py-3 text-center mt-5 mb-4 but">
                <h4 class="fw-semibold mb-0">Get Card</h4>
            </div>
          </a>
          <div class="text-center mt-4 pt-3">
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
  <script>
$(function() {
	setTimeout(function() {
		$('.fly-in-text').removeClass('hidden');
	},500);
})();
  </script>
@endsection
