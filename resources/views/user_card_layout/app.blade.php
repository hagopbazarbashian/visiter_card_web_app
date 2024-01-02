<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script src="https://kit.fontawesome.com/0b13bde584.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

    @include('user_card_layout.style')

</head>
<style>
 
.waveContainer{
  height: 151vh;
  overflow: hidden;
}
.viewBox{
  height: 100%;
  width: 100%;
}
.path{
  stroke: none;
  fill: rgb(253, 253, 253);
}
/*scroll to top button*/
#scrollup {
  color: #fff;
  height: 45px;
  width: 45px;
  cursor: pointer;
  font-size: 28px;
  background: {{$cardform->color}};
  border: 1px solid : {{$cardform->color}};
  text-align: center;
  position: fixed;
  bottom: 21px;
  right: 18px;
  z-index: 5;
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  display: none;
  transition: .3s;
}
</style>
<body>

<!--==========================================
                  PRE-LOADER
===========================================-->
{{-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>{{$cardform->full_name}}</h2>
                <h6>{{$cardform->title ?? ''}} @if($cardform->company) \ @endif{{$cardform->company ?? ''}}</h6>
            </div>
        </div>
    </div> 
</div> --}}

<!--==========================================
                    HEADER
===========================================-->
<header id="home">
    <!--HEADER BACKGROUND-->
    <div class="header-background section">
        <!-- WAVE DESIGN -->
        <div class="waveContainer">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="viewBox">
              <path d="M0.00,49.98 C254.51,72.06 306.43,22.41 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" class="path">
              </path>
            </svg>
          </div>
    </div>
</header>

<div id="v-card-holder" class="section">
    @yield('user_card')
</div>

<!--==========================================
                     SCROLL TO TOP
===========================================-->
<a href="#" class="btn waves-effect-share" onclick="shareContact()"><i class="fa-regular fa-paper-plane"></i> Share</a>


@include('user_card_layout.footer')
@include('user_card_layout.js')
</body>
</html>
