@extends('layout.app') @section('title'){{ 'Welcome User' }}@endsection @section('home')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
    .img-box {
    background-color: #yourBackgroundColor;
    /* Add other styling as needed */
}

.image-container {
    position: relative;
}
</style>
<section class="section-padding-bottom hide-on-desktop">
    <a class="butonadd" href="{{route('new_card')}}">
        <div class="d-flex justify-content-end">
            <div class="nav-item ms-auto">
                <i style="margin: 13px;" class="fa fa-plus fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </a>
   <div class="tabs">
      <div class="container-fluid">
         <div class="content-details iq-custom-tab-style-two">
            <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
               {{-- <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Information</a>
               </li> --}}
               <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="pill" href="#watchlist" role="tab" aria-selected="false">Show Your card</a>
               </li>
            </ul>
            <div class="tab-content px-0">
               {{-- Show Your Card --}}
               <div id="watchlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  <div class="overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between my-4">
                        <h5 class="main-title text-capitalize mb-0">Your Card</h5>
                     </div>
                     <div class="ty">
                        @if ($filteredCardforms->isEmpty())
                        <div class="alert alert-info" role="alert">
                           You don't have any active cards.
                        </div>
                        @else @foreach ($filteredCardforms as $filteredCardform)
                        <div class="ty">
                              <div class="watchlist-warpper card-hover-style-two">
                                 <div class="block-images position-relative w-100">
                                    <div class="img-box" style="background-color: #yourBackgroundColor;">
                                       <a  class="btn sty"  id="triggerButton{{$filteredCardform->id}}">
                                          <i class="fa-solid fa-bars" style="color: #fff;"></i>
                                      </a>
                                        @include('User.modal_for_user_card')
                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#cardDetailsModal{{$filteredCardform->id}}">
                                            <!-- Your card image code here -->
                                            <a href="{{ route('single_card', $filteredCardform->id) }}">
                                            <div class="image-container">
                                                @if($filteredCardform->photo)
                                                    <img src="{{ asset('user_image/' . $filteredCardform->photo) }}" alt="User Image" class="img-fluid object-cover w-100 d-block border-0" />
                                                @else
                                                    <img src="{{ asset('assets/images/download.jpg') }}" class="img-fluid object-cover w-100 d-block border-0" />
                                                @endif
                                                <!-- Text part -->
                                                 @include('User.wave_shape')
                                                <span class="text-whiteee">{{$filteredCardform->full_name}}</span>
                                            </div>
                                            </a>
                                            <!-- Edit icon -->
                                        </button>
                                       <!-- Modal Body -->
                                        <div class="modal-body text-center">
                                            <a  id="qr-icon" class="qr-icon btn  share" data-url="{{ route('single_card', $filteredCardform->id) }}">
                                                <i class="fa-regular fa-paper-plane tr sh"></i>
                                            </a>
                                        </div>
                                        <div class="qrcode-container text-center" style="display: none;">
                                            <div class="qrcode-close" style="cursor: pointer;">&times;</div>
                                            <div class="qrcode"></div>
                                        </div>
                                        </div>
                                 </div>
                              </div>
                        </div>
                        @endforeach @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bzZwK8hO06P5wGn5aPQkflkLgpoWB/JDl/G9E963b0gs1pLV9Z1glqQ8V0oH3h/R" crossorigin="anonymous"></script>
<script>
   // Enable Bootstrap tooltips
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
   });
</script>
<script>
   function toggleInput(socialMedia) {
      var contentId = socialMedia + "-content";
      $("#" + contentId).toggleClass("active");
   }
</script>
<script>
   function toggleInput(socialMedia) {
      var contentId = socialMedia + "-content";
      var contentElement = document.getElementById(contentId);

      if (contentElement) {
         contentElement.classList.toggle("active");
      } else {
         console.error("Element with ID '" + contentId + "' not found.");
      }
   }

   function toggleSocialIcons() {
      var socialIconsContainer = document.getElementById("socialIcons");

      if (socialIconsContainer) {
         socialIconsContainer.classList.toggle("show");
      }
   }
</script>
@endsection
