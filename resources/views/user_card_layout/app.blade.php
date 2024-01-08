<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <script src="https://kit.fontawesome.com/0b13bde584.js" crossorigin="anonymous"></script>

    <meta name="description" content="Card youcan add widget and share your info via quick QE scan" />
    <meta name="keywords" content="">
    <!-- Standard Favicon -->
    <link rel="icon" href="{{ asset('favicon_io/android-chrome-512x512.png') }}">
    <!-- Touch Icons - iOS and Android 2.1+ -->
    <link rel="apple-touch-icon" href="{{asset('favicon_io/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon_io/android-chrome-512x512.png') }}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon_io/android-chrome-192x192.png') }}" >
    <meta property="og:title" content="Get your first card">
    <meta property="og:description" content="Card youcan add widget and share your info via quick QE scan">
    <meta property="og:image" content="https://toch.am/assets/images/lot.png">
    <meta property="og:url" content="https://toch.am">
    <meta property="og:type" content="website">
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
<a href="#" class="btn waves-effect-share"  id="shareButton" ><i class="fa-solid fa-paper-plane" style="position: absolute!important;left: 10px !important;"></i></a>
</div>

@include('user_card_layout.js')
</body>
</html>
