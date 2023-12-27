@extends('layout.app') @section('title'){{ 'Welcome User' }}@endsection @section('home')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<section class="section-padding-bottom">
   <div class="profile-box">
      <div class="container-fluid">
         <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
            <div class="d-flex align-items-center gap-3">
               <div>
                  <h6 class="font-size-18 text-capitalize text-white fw-500">{{auth()->user()->name}}</h6>
                  <span class="font-size-14 text-white fw-500">{{auth()->user()->email}}</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tabs">
      <div class="container-fluid">
         <div class="content-details iq-custom-tab-style-two">
            <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Information</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="#watchlist" role="tab" aria-selected="false">Show Your card</a>
               </li>
            </ul>
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  <form method="post" action="{{route('add_card')}}" class="form yy" enctype="multipart/form-data">
                     @csrf
                     <h2 class="title">Add Your Card</h2>

                     <div class="file-input-container">
                        <label for="photo" class="file-input-button">Choose a Photo</label>
                        <input type="file" name="photo" id="photo" class="file-input" onchange="previewImage(this)" />
                        <img id="image-preview" class="image-preview" alt="Image Preview" />
                        <p id="no-image-message" class="no-image-message" style="display: none;">You don't have an image.</p>
                     </div>
                     <div>
                        <label for="holder">Full Name</label>
                        <input type="text" name="full_name" value="{{old('full_name')}}" />
                     </div>
                     <div>
                        <label for="holder">Title</label>
                        <input type="text" name="title" value="{{old('title')}}" />
                     </div>
                     <div>
                        <label for="holder">Department</label>
                        <input type="text" name="department" value="{{old('title')}}" />
                     </div>
                     <div>
                        <label for="holder">Company</label>
                        <input type="text" name="company" value="{{old('title')}}" />
                     </div>
                     <div class="color-input-container">
                        <label for="color">Color Card</label>
                        <input type="color" id="color" name="color" value="{{old('color')}}" class="color-input" />
                        <input type="text" id="color-code" name="color-code" class="color-code-input" placeholder="Color Code" value="{{old('color-code')}}" oninput="updateColorBox()" />
                     </div>

                     <label for="headline">Headline</label>
                     <textarea name="headline" id="headline">{{ old('headline') }}</textarea>

                     <div>
                        <label for="holder">Date</label>
                        <input type="date" name="date" value="{{old('date')}}" />
                     </div>
                     <div>
                        <label for="holder">Email</label>
                        <input type="text" name="email" value="{{old('email')}}" />
                     </div>
                     <div>
                        <label for="holder">Phone</label>
                        <input type="number" name="Phone" placeholder="+374 XX XXXXX" value="{{old('Phone')}}" />
                     </div>
                     <a class="toggle-button" onclick="toggleSocialIcons()"> <i class="material-icons">Add</i> your social media </a>
                     <div class="social-icons-container" id="socialIcons">
                        <div class="wrapper">
                           @include('User.socel_media_icon')
                        </div>
                        <!-- Add other social media icons as needed -->
                     </div>
                     @include('User.input_socel_media')
                     <!-- Your existing form fields go here --> 
                     <div id="socialMediaContainer" class="social-media-container"></div>
                     <div class="full-button">
                        <div class="iq-button" style="display: flex; justify-content: space-around;">
                           <button type="submit" class="btn text-uppercase position-relative">
                              <span class="button-text">Add your card</span>
                              <i class="fa-solid fa-play"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
               {{-- Show Your Card --}}
               <div id="watchlist" class="tab-pane animated fadeInUp" role="tabpanel">
                  <div class="overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between my-4">
                        <h5 class="main-title text-capitalize mb-0">Your Card</h5>
                     </div>
                     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                        @if ($filteredCardforms->isEmpty())
                        <div class="alert alert-info" role="alert">
                           You don't have any active cards.
                        </div>
                        @else @foreach ($filteredCardforms as $filteredCardform)
                        <div class="col mb-4">
                              <div class="watchlist-warpper card-hover-style-two">
                                 <div class="block-images position-relative w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="You Need Edit Your Card ?">
                                    <div class="img-box">
                                       <button type="button" class="btn btn-link"  data-bs-toggle="modal" data-bs-target="#cardDetailsModal{{$filteredCardform->id}}">
                                          <!-- Your card image code here -->
                                          @if($filteredCardform->photo)
                                          <img src="{{ asset('user_image/' . $filteredCardform->photo) }}" alt="User Image" class="img-fluid object-cover w-100 d-block border-0" />
                                          @else
                                          <img src="{{ asset('assets/images/download.jpg') }}" class="img-fluid object-cover w-100 d-block border-0" />
                                          @endif
                                       </button>
                                       <!-- Edit icon -->
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body text-center">
                                       <!-- Edit Icon -->
                                       <a href="{{ route('full_visiter_card', $filteredCardform->id) }}" class="edit-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card">
                                          <i class="fas fa-edit fa-2x" style="color: #68b7e2; margin-right: 20px;font-size: 19px;"></i>
                                       </a>
                                       <form id="deleteForm{{$filteredCardform->id}}" action="{{ route('delete_card', $filteredCardform->id) }}" style="display: inline; margin: 0; padding: 0;">
                                       @csrf
                                       @method('DELETE')
                                          <!-- Delete Icon -->
                                          <a href="#"  class="delete-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Card" data-delete-id="{{$filteredCardform->id}}">
                                             <i class="fas fa-trash-alt fa-2x" style="color: #68b7e2; margin-right: 20px;font-size: 19px;"></i>
                                          </a>
                                       </form>
                                       <!-- QR Icon -->
                                       <a  id="qr-icon" class="qr-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate QR Code" data-url="{{ route('single_card', $filteredCardform->id) }}">
                                          <i class="fas fa-qrcode fa-2x" style="color: #68b7e2; margin-right: 20px;font-size: 19px;"></i>
                                       </a>
                                       <div class="qrcode-container text-center" style="display: none;">
                                          <div class="qrcode-close" style="cursor: pointer;">&times;</div>
                                          <div class="qrcode"></div>
                                      </div>
                                       <!--Duplicate Icon -->
                                       <a href="" class="duplicate-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Duplicate Card">
                                          <i class="fas fa-copy fa-2x" style="color: #68b7e2;margin-right: 20px; font-size: 19px;"></i>
                                       </a>

                                       <!-- Duplicate Icon -->
                                       <a href="{{ route('single_card', $filteredCardform->id) }}" class="duplicate-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="View Card">
                                          <i class="fas fa-eye fa-2x" style="color: #68b7e2;margin-right: 20px; font-size: 19px;"></i>
                                       </a>
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
