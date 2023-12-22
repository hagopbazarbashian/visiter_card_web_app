@extends('layout.app') @section('title'){{ 'Welcome User' }}@endsection @section('home')
<style>
   /* Add your CSS styles here */
   .image-preview {
      max-width: 25%;
      height: auto;
   }
   .error-message {
      color: red;
      font-size: 14px;
      margin-top: 5px;
   }
    /* Customize the tooltip styles */
    .tooltip-inner {
        background-color: red;
        color: white;
    }

    .tooltip.bs-tooltip-top .arrow::before {
        border-top-color: red !important;
    }
</style>
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
            <div class="iq-button">
               <a href="{{route('user-edit.index')}}" class="btn text-uppercase position-relative">
                  <span class="button-text">Edit Your card</span>
                  <i class="fa-solid fa-play"></i>
               </a>
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
               {{--
               <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false"></a>
               </li>
               --}}
            </ul>
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  <form method="post" action="{{ route('add_card') }}" onsubmit="return validateForm()" enctype="multipart/form-data">
                     @csrf
                     <img id="imagePreview" class="image-preview" />
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Add Photo</label>
                        <input type="file" id="fileInput" name="photo" value="{{old('photo')}}" onchange="validateFile(event)" placeholder="Add Photo" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Full Name</label>
                        <input type="text" name="full_name" class="form-control rounded-0" value="{{old('full_name')}}" placeholder="Full Name" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Title</label>
                        <input type="text" name="title" class="form-control rounded-0" value="{{old('title')}}" placeholder="Title" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Department</label>
                        <input type="text" name="department" class="form-control rounded-0" value="{{old('department')}}" placeholder="Department" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Company</label>
                        <input type="text" name="company" class="form-control rounded-0" value="{{old('company')}}" placeholder="Company" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Color Card</label>
                        <input type="color" id="colorInput" name="color" onchange="updateColor(event)" value="{{old('color')}}" placeholder="Color Card" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Headline</label>
                        <textarea type="text" name="headline" class="form-control rounded-0" value="{{old('headline')}}" placeholder="Headline"></textarea>
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Email</label>
                        <input type="text" name="email" class="form-control rounded-0" value="{{old('email')}}" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Phone</label>
                        <input type="text" name="phone" class="form-control rounded-0" id="phoneInput" placeholder="(555) 555-555" value="{{old('phone')}}" />
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Facebook profile Link</label>
                        <input type="text" id="facebookProfile" name="fb" class="form-control rounded-0" oninput="validateAndToggleInput(this.value)" value="{{old('fb')}}" placeholder="Facebook profile Link" />
                        <span id="error-message" class="error-message"></span>
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">instagram profile Link</label>
                        <input type="text" id="instagramProfile" name="ins" class="form-control rounded-0" oninput="validateAndToggleInstagramInput(this.value)" value="{{old('ins')}}" placeholder="instagram profile Link" />
                        <span id="error-messageins" class="error-message"></span>
                     </div>
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">linkedin profile Link</label>
                        <input type="text" id="linkedinProfile" name="ins" class="form-control rounded-0" oninput="validateAndToggleLinkedInInput(this.value)" value="{{old('ins')}}" placeholder="instagram profile Link" />
                        <span id="error-messagelinkedin" class="error-message"></span>
                     </div>
                     {{--
                     <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Facebook profile Link</label>
                        <input type="text" id="facebookProfile" name="fb" class="form-control rounded-0" oninput="validateAndToggleInput(this.value)" />
                        <span id="error-message" class="error-message"></span>
                     </div>
                     --}}

                     <div class="full-button">
                        <div class="iq-button" style="display: flex; justify-content: space-around;">
                           <button type="submit" class="btn text-uppercase position-relative">
                              <span class="button-text">Add Card</span>
                              <i class="fa-solid fa-play"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
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
                              <div class="block-images position-relative w-100" data-bs-toggle="tooltip" data-bs-placement="top" title="Do you need to activate NFC?">
                                 <div class="img-box">
                                    <a href="{{route('full_visiter_card', $filteredCardform->id)}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="https://i.ytimg.com/vi/Ein864T2IlU/maxresdefault.jpg" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">{{$filteredCardform->full_name}}</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Activ</span>
                                       </div>
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
