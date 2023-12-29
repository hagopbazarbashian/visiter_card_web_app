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
    .b{
        padding: 0rem 0 !important;
    }
</style>
<section class="section-padding-bottom">
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
                                    <h5 class="utf-job-listing-company"><span><i class="icon-feather-briefcase"></i> Card youcan add to Apple Wallet or as a widget and share your info via quick QE scan</span></h5>
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
@endsection
