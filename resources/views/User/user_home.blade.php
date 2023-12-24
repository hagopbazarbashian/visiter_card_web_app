@extends('layout.app') @section('title'){{ 'Welcome User' }}@endsection @section('home')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

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
                        <label for="holder">Email</label>
                        <input type="text" name="email" value="{{old('email')}}" />
                     </div>
                     <div>
                        <label for="holder">Phone</label>
                        <input type="number" name="Phone" placeholder="+374 XX XXXXX" value="{{old('Phone')}}" />
                     </div>
                     <div class="wrapper">
                        <a href="#" onclick="toggleInput('facebook')">
                           <div class="bg-ico" id="facebook"><i class="fab fa-facebook social facebook fa-3x"></i></div>
                        </a>
                        <a href="#" onclick="toggleInput('pinterest')">
                           <div class="bg-ico" id="pinterest"><i class="fab fa-pinterest social pinterest fa-3x"></i></div>
                        </a>
                        <a href="#" onclick="toggleInput('twitter')">
                           <div class="bg-ico" id="twitter"><i class="fab fa-twitter social twitter fa-3x"></i></div>
                        </a>
                        <a href="#" onclick="toggleInput('instagram')">
                           <div class="bg-ico" id="instagram"><i class="fab fa-instagram social instagram fa-3x"></i></div>
                        </a>
                        <a href="#" onclick="toggleInput('whatsapp')">
                           <div class="bg-ico" id="whatsapp"><i class="fab fa-whatsapp social pinterest fa-3x"></i></div>
                        </a>
                        <a href="#" onclick="toggleInput('youtube')">
                           <div class="bg-ico" id="youtube"><i class="fab fa-youtube social pinterest fa-3x"></i></div>
                        </a>
                        <!-- Add other social media icons as needed -->
                     </div>
                     <!-- Your existing form fields go here -->
                     <div class="social-media-input" id="facebookInput">
                        <label for="facebookUsername">Facebook Username</label>
                        <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook username"  value="{{old('facebook')}}"/>
                     </div>
                     <div class="social-media-input" id="pinterestInput">
                        <label for="pinterestUsername">Pinterest Username</label>
                        <input type="text" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest username" value="{{old('pinterest')}}"/>
                     </div>
                     <div class="social-media-input" id="twitterInput">
                        <label for="twitterUsername">twitter Username</label>
                        <input type="text" id="twitterUsername" name="twitter" placeholder="Enter your twitter username" value="{{old('twitter')}}"/>
                     </div>
                     <div class="social-media-input" id="instagramInput">
                        <label for="instagramUsername">instagram Username</label>
                        <input type="text" id="instagramUsername" name="instagram" placeholder="Enter your instagram username" value="{{old('instagram')}}"/>
                     </div>
                     <div class="social-media-input" id="whatsappInput">
                        <label for="whatsappUsername">instagram Username</label>
                        <input type="text" id="whatsappUsername" name="whatsapp" placeholder="Enter your whatsapp username" value="{{old('whatsapp')}}"/>
                     </div>
                     <div class="social-media-input" id="youtubeInput">
                        <label for="youtubeUsername">youtube Username</label>
                        <input type="text" id="youtubeUsername" name="youtube" placeholder="Enter your youtube username" value="{{old('youtube')}}"/>
                     </div>
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
                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#cardDetailsModal">
                                            <!-- Your card image code here -->
                                            @if($filteredCardform->photo)
                                                <img src="{{ asset('user_image/' . $filteredCardform->photo) }}" alt="User Image" class="img-fluid object-cover w-100 d-block border-0" />
                                            @else
                                                <img src="{{ asset('assets/images/download.jpg') }}" class="img-fluid object-cover w-100 d-block border-0" />
                                            @endif
                                        </button>
                                    </div>
                                    <div class="card-description">
                                        <h5 class="text-capitalize fw-500"><a href="">{{$filteredCardform->full_name}}</a></h5>
                                        <div class="d-flex align-items-center gap-3"></div>
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
@include('User.modal')
</section>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bzZwK8hO06P5wGn5aPQkflkLgpoWB/JDl/G9E963b0gs1pLV9Z1glqQ8V0oH3h/R" crossorigin="anonymous"></script>
<script>
   // Enable Bootstrap tooltips
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
   var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
   });
</script>
@endsection
