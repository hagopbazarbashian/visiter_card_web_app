@extends('layout.app')
@section('title'){{ 'Wecom-User' }}@endsection
@section('home')

<style>
h2 {
	color: #c19bf5;
    font-size: 49px;
    position: relative;
    box-shadow: 0 0 19px;
    text-align: center;
    text-transform: uppercase;
    -webkit-text-stroke: 0.3vw #f7f7fe; 
     border-top-left-radius: 20px 20px !important;
    border-top-right-radius: 20px 20px !important;
    border-bottom-left-radius: 20px 20px !important;
    border-bottom-right-radius: 20px 20px !important;
}

</style>
<div class="section-padding vh-100">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2>Welcome</h2>
          <p class="text-center">Get your first card .</p>
          <a href="{{ route('get_card') }}">
            <div class="py-3 text-center mt-5 mb-4" style="background-color:#68b7e2 !important; background-repeat: no-repeat; background-position: center center; background-size: 68% auto;">
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
