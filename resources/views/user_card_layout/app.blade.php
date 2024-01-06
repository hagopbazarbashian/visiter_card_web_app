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
        {{-- 43 for wave --}}
        <div class="waveContainer">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="viewBox">
              <path d="M0.00,49.98 C254.51,72.06 306.43,40.41 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" class="path">
              </path>
            </svg>
          </div> 
    </div>
</header>

<div id="v-card-holder" class="section hide-on-desktop">
    @yield('user_card')
</div>


 
<!--==========================================
                     SCROLL TO TOP
===========================================--> 
 
<div class="ff">
<a href="#" class="btn waves-effect-share"  id="shareButton" ><i class="fa-regular fa-paper-plane" style="position: absolute!important;left: 10px !important;"></i></a>
</div>
@include('user_card_layout.js')
</body>
</html>
