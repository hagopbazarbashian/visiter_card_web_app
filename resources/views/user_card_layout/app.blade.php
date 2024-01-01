<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>@yield('title')</title>

    @include('user_card_layout.style')

</head>
<style>

.waveContainer{
  height: 84vh;
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
    {{-- <nav id="theMenu" class="menu">

        <!--MENU-->
        <div id="menu-options" class="menu-wrap">

            <!--PERSONAL LOGO-->
            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="images/profile/john.png">
            </div>
            <br>

            <!--OPTIONS-->
            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Experience</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
            <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
            <a href="#testimonials"><i class="title-icon fa fa-users"></i>Testimonials</a>
            <a href="#pricing-table"><i class="title-icon fa fa-money"></i>Pricing</a>
            <a href="#blog"><i class="title-icon fa fa-pencil-square"></i>Blog</a>
            <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
        </div>

        <!-- MENU BUTTON -->
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav> --}}

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
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

@include('user_card_layout.footer')
@include('user_card_layout.js')
</body>
</html>
