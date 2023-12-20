@extends('layout.app') 
@section('title'){{ 'Home' }}@endsection 
@section('home')
<div class="position-relative swiper swiper-slide-space-0" data-swiper="home-banner-slider">
   <div class="slider m-0 p-0 swiper-wrapper home-slider">
      <a class="swiper-slide slide" href="./shop/product-detail.html">
         <img src="./assets/images/shop/slider-01.webp" class="img-fluid" alt="slider-img" />
      </a>
      <a class="swiper-slide slide" href="./shop/product-detail.html">
         <img src="./assets/images/shop/slider-02.webp" class="img-fluid" alt="slider-img" />
      </a>
      <a class="swiper-slide slide" href="./shop/product-detail.html">
         <img src="./assets/images/shop/slider-03.webp" class="img-fluid" alt="slider-img" />
      </a>
   </div>
   <div class="swiper-banner-button-prev swiper-nav" id="home-banner-slider-prev">
      <i></i>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none" stroke="currentColor">
         <circle r="20" cy="22" cx="22"></circle>
      </svg>
   </div>
   <div class="swiper-banner-button-next swiper-nav" id="home-banner-slider-next">
      <i></i>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44" height="44" fill="none" stroke="currentColor">
         <circle r="20" cy="22" cx="22"></circle>
      </svg>
   </div>
</div>
<section class="section-padding"
   style="background:url(./assets/images/shop/card/bg-img.webp); background-position: center center; background-repeat: no-repeat; background-size: cover;">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12 ">
            <img src="./assets/images/shop/card/multipal.webp" class="img-fluid" alt="">
         </div>
         <div class="col-lg-6 col-md-12 mt-4 mt-md-0">
            <!--Logo -->
            <div class="logo-default">
                <a class="navbar-brand text-primary" href="./index.html"> 
                    <img class="img-fluid logo" src="./assets/images/logo.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <div class="logo-hotstar">
                <a class="navbar-brand text-primary" href="./index.html"> 
                    <img class="img-fluid logo" src="./assets/images/logo-hotstar.webp" loading="lazy" alt="streamit" />
                </a>
            </div> 
            <div class="logo-prime">
                <a class="navbar-brand text-primary" href="./index.html"> 
                    <img class="img-fluid logo" src="./assets/images/logo-prime.webp" loading="lazy" alt="streamit" />
                </a>
            </div> 
            <div class="logo-hulu">
                <a class="navbar-brand text-primary" href="./index.html"> 
                    <img class="img-fluid logo" src="./assets/images/logo-hulu.webp" loading="lazy" alt="streamit" />
                </a>
            </div>
            <h2 class="mt-3 mb-3"> Wear Streamit, Buy Streamit and Love Streamit </h2>
            <p class="mb-4 line-count-3">Buy exclusive streamit products from our store and get amazing benefits.</p>
            <div class="iq-button">
                <a href="shop/product-detail.html" class="btn text-uppercase position-relative">
                    <span class="button-text">shop now</span>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection
