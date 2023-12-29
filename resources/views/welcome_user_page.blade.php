@extends('layout.app')
@section('title'){{ 'Wecom-User' }}@endsection
@section('home')
<style>
h2 {
	color: #c19bf5;
	font-size: 14vw;
	position: relative;
    text-align: center;
	text-transform: uppercase;
	-webkit-text-stroke: 0.3vw #f7f7fe;
}

h2::before {
	top: 0;
	left: 0;
	width: 0;
	height: 100%;
	color: #8338ec;
	overflow: hidden;
	position: absolute;
	content: attr(data-text);
	border-right: 2px solid #c19bf5;
	-webkit-text-stroke: 0vw #f7f7fe;
	animation: animate 6s linear infinite;
}

@keyframes animate {
	0%,
	10%,
	100% {
		width: 0;
	}

	70%,
	90% {
		width: 100%;
	}
}

</style>
<div class="section-padding vh-100">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h2 data-text="Welcome">Welcome</h2>
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
