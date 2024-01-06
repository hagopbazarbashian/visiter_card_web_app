@extends('user_card_layout.app') @section('title'){{ 'Profile' }}@endsection @section('user_card')
@if (isset($cardform))
@include('user_card_layout.all_css_in_card_page')
<div class="">
   <div class="">
      <div class="">
         <!-- V-CARD -->
         <div id="v-card" class="card">
            <!-- PROFILE PICTURE -->
            @if ($cardform->logo)
            {{-- <div id="profile" class="right">
                <img alt="profile-image" class="img-responsive" src="{{asset('logo/' . $cardform->logo)}}" />
            </div> --}}
            @endif
            <!--VIDEO CLOSE BUTTON-->
            <!--<div id="close-btn" class="btn-floating icon-close">
                    <i class="fa fa-close"></i>
                </div>-->

            <div class="card-content">
               <!-- NAME & STATUS -->
               <div class="info-headings">
                  <h4 class="text-uppercase left">{{$cardform->full_name}}</h4>
                  <h6 class="text-capitalize left">{{$cardform->title ?? ''}} @if($cardform->company) & @endif {{$cardform->company ?? '' }}</h6>
               </div>
               <div class="card-content">
                  <!-- ABOUT PARAGRAPH -->
                  <p style="color: black;">
                     {{$cardform->headline ?? ''}}
                  </p>
               </div>
            </div>
            <div id="about-btn" class="card-action">
               <div class="about-btn">
                  <!-- DOWNLOAD CV BUTTON -->
                  <a href="data:text/vcard;charset=utf-8,BEGIN:VCARD%0AVERSION:3.0%0AFN:{{ urlencode($cardform->full_name) }}%20Doe%0AEMAIL:{{ urlencode($cardform->email) }}%0ATEL:{{ urlencode($cardform->phone) }}%0AEND:VCARD" download="contact.vcf" class="btn waves-effect">Save Contact</a>
                  <!-- CONTACT BUTTON -->
               </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="infos">
               @include('user_card_layout.social_media_link')
            </div>
            {{-- @include('user_card_layout.other') --}}
         </div>
         <!--HTML 5 VIDEO-->
         <!-- <video id="html-video" class="video" poster="images/poster/poster.jpg" controls>
                    <source src="videos/........" type="video/webm">
                    <source src="videos/..........." type="video/mp4">
                </video>-->
      </div>
   </div>
</div>
@else
<div style="display:flex;justify-content: space-around;">
   <p>Your Card is not Activ</p> 
</div>
@endif
@endsection
