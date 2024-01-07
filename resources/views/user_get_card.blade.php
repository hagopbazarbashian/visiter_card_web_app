@extends('layout.app')
@section('title'){{ 'get-card' }}@endsection
@section('home')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<style>
    .profile-box{
        background-color:#fff !important;
        padding: 1rem 0;
        margin-bottom: 1rem;
    }
    .section-padding-bottom{
        padding: 5px 18px 1.875rem !important;
    }
    .b{
        padding: 0rem 0 !important;
    }
    /* Styles for screens with a minimum width of 768 pixels */
    @media (min-width: 768px) {
        .hide-on-desktop {
            display: none;
        }
    }

    /* Styles for screens with a maximum width of 767 pixels */
    @media (max-width: 767px) {
        .show-on-mobile {
            display: block;
        }

        .hide-on-mobile {
            display: none;
        }
    }
     .d{
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4; /* Set your desired background color */
       }


        #mobile-warning {
            display: none;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc; /* Set your desired border color */
            border-radius: 8px; /* Set your desired border radius */
            background-color: #fff; /* Set your desired background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Set your desired box shadow */
        }
</style>
<div id="mobile-warning"  class="d">
    <p>Please open this page on a mobile device.</p>
</div>
<section class="section-padding-bottom hide-on-desktop">
    <div class="profile-box">
       <div class="container-fluid">
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
             <div class="d-flex align-items-center gap-3">
                <div class="back-button">
                   <a href="{{ route('home') }}">
                       <i class="fa-solid fa-arrow-left"></i>
                   </a>
               </div>
             </div>
          </div>
       </div>
    </div>
    <div class="profile-box b">
        <div class="container-fluid">
           <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
              <div class="d-flex align-items-center gap-3">
                 <div class="back-button">
                    <a>
                        <h1>Get Card</h1>
                    </a>
                </div>
              </div>
           </div>
        </div>
     </div>
    <div class="container">
        <div class="row">
            <div class="utf-companies-list-aera">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="utf-company-inner-alignment">
                                <a class="company">
                                    <div class="featured-type featured">Coming Soon</div>
                                    <span class="company-logo"><img src="{{asset('assets/images/IMG_3085.png')}}" alt=""></span>
                                    <h4>Physical</h4>
                                    <h5 class="utf-job-listing-company"><span><i class="icon-feather-briefcase"></i>Smart NFC card that enables you to share your info with just a tap</span></h5>
                                    {{-- <div class="utf-star-rating" data-rating="4.5"></div> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="utf-company-inner-alignment">
                                <a href="{{route('home')}}" class="company">
                                    <span class="company-logo"><img src="{{asset('assets/images/IMG_3086.png')}}" alt=""></span>
                                    <h4>Virtual</h4>
                                    <h5 class="utf-job-listing-company"><span><i class="icon-feather-briefcase"></i>Card youcan add widget and share your info via quick QE scan</span></h5>
                                    {{-- <div class="utf-star-rating" data-rating="4.5"></div> --}}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <script>
    // JavaScript code to display the warning if the screen width is greater than a certain threshold
    document.addEventListener('DOMContentLoaded', function () {
        var mobileWarning = document.getElementById('mobile-warning');

        function checkScreenSize() {
            if (window.innerWidth > 768) { // Adjust the threshold as needed
                mobileWarning.style.display = 'block';
            } else {
                mobileWarning.style.display = 'none';
            }
        }

        // Check screen size on page load
        checkScreenSize();

        // Check screen size on window resize
        window.addEventListener('resize', checkScreenSize);
    });
</script>

@endsection
