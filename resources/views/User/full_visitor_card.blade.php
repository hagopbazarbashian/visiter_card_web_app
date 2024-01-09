<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Develop Smart">

    <title>Welcome {{$cardform->full_name}}</title>
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


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>


     @include('user_card_layout.style')
     @include('user_card_layout.all_css_in_card_page')

</head>
<body>

@if ($cardform->status == 1)
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
                <h2>JOHN DOE</h2>
                <h6>Software Engineer & UI/UX Expert</h6>
            </div>
        </div>
    </div>
</div> --}}

<!--==========================================
                    HEADER
===========================================-->
<header id="home">

    <!--HEADER BACKGROUND-->
    <div class="header-background section"></div>
        <!-- WAVE DESIGN -->
        {{-- 43 for wave --}}
        {{-- <div class="waveContainer wave">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="viewBox">
              <path d="M0.00,49.98 C254.51,72.06 306.43,40.41 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" class="path">
              </path>
            </svg>
        </div> --}}
</header>


<!--==========================================
                   V-CARD
===========================================-->
<div id="v-card-holder" class="section">
    <div class="">
        <div class="">
            <div class="">
                <!-- V-CARD -->
                <div id="v-card" class="card">
                    @if($cardform->logo)
                    <!-- PROFILE PICTURE -->
                    <div id="profile" class="right">
                        <img alt="profile-image" class="img-responsive" src="{{asset('logo/' . $cardform->logo)}}">
                        <div class="slant"></div>
                        <!--EMPTY PLUS BUTTON-->
                        <div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>
                    </div>
                    @endif
                    <div class="card-content">
                        <!-- NAME & STATUS -->
                        <div class="info-headings">
                            <h4 class="text-uppercase left">{{$cardform->full_name}}</h4>
                            <h6 class="text-capitalize left">{{$cardform->title ?? ''}} @if($cardform->company) - @endif {{$cardform->company ?? '' }}</h6>
                        </div>
                    </div>
                     <!-- BUTTONS -->
                     <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <!-- DOWNLOAD CV BUTTON -->
                            <a href="data:text/vcard;charset=utf-8,BEGIN:VCARD%0AVERSION:3.0%0AFN:{{ urlencode($cardform->full_name) }}%0AEMAIL:{{ urlencode($cardform->email) }}%0ATEL:{{ urlencode($cardform->phone) }}%0AEND:VCARD" download="contact.vcf" class="btn waves-effect">Save Contact</a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div id="v-card-holder" class="section">
    <div class="">
        <div class="">
            <div class="">
                <!-- V-CARD -->
                <div id="v-card" class="card">
                    <div class="infos">
                        <ul class="profile-list">
                            @include('user_card_layout.social_media_link')

                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<!--==========================================
                   ABOUT
===========================================-->
{{-- <div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- DETAILS -->
                <div id="about-card" class="card">
                    <div class="card-content">
                        <!-- ABOUT PARAGRAPH -->
                        <div class="infos">
                            <ul class="profile-list">
                                @include('user_card_layout.social_media_link')

                            </ul>
                        </div>
                    </div>

                    <!-- BUTTONS -->
                    <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <!-- DOWNLOAD CV BUTTON -->
                            <a href="#" class="btn waves-effect">Download CV</a>
                            <!-- CONTACT BUTTON -->
                            <a href="#contact" class="btn waves-effect">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


{{-- <div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div> --}}
<div class="ff">
    <a href="#" class="btn waves-effect-share"  id="shareButton" ><i class="fa fa-paper-plane" style="position: absolute!important;left: 10px !important;"></i></a>
</div>

@include('user_card_layout.js')
@else
    <p>your page closed by admin</p>
@endif
</body>
</html>













