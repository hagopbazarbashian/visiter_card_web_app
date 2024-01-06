@extends('layout.app') @section('title'){{ 'Edit Your Your Card' }}@endsection @section('home')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<section class="section-padding-bottom">
   <div class="profile-box">
      <div class="container-fluid">
         <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
            <div class="d-flex align-items-center gap-3">
               <div class="back-button">
                  <a href="{{ route('home') }}">
                      <i class="fa-solid fa-arrow-left"></i> Back
                  </a>
              </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tabs">
      <div class="container-fluid">
         <div class="content-details iq-custom-tab-style-two">
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  <form method="post" action="{{route('full_visiter_card_update',$cardform->id)}}" class="form" enctype="multipart/form-data">
                     @csrf
                    <div class="tb-container">
                        <div class="tb-img-view">
                           @if ($cardform->photo)
                            <img src="{{ asset('user_image/' . $cardform->photo) }}"/>
                            <a href="#" class="delete-link" onclick="deleteprofile({{$socelmedia->id}})">
                                <i class="fa fa-trash delete-icon-icon" aria-hidden="true"></i>
                            </a>
                           @endif
                           <img class="profile" id="tb-image" />
                        </div>
                        <label for="tb-file-upload">Upload Profile Image</label>
                        <input type="file" name="photo" id="tb-file-upload" accept="image/*" onchange="fileUpload(event);" />
                     </div>
                     @if ($cardform->logo)
                     <div>
                        <label for="holder">Add Your Logo</label>
                        <input type="file" name="logo" accept="image/*" value="{{$cardform->logo ?? ''}}" />
                         <a href="#" class="link-for-logo" onclick="deleteprologo({{$socelmedia->id}})">
                           <i class="fa fa-trash  link-for-logo" aria-hidden="true"></i>
                         </a>
                     </div>
                     @else
                        <div>
                        <label for="holder">Add Your Logo</label>
                        <input type="file" name="logo" accept="image/*" value="{{$cardform->logo ?? ''}}" />
                     </div>
                     @endif
                     
                     <div>
                        <label for="holder">Full Name</label>
                        <input type="text" name="full_name" value="{{$cardform->full_name ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Job Position</label>
                        <input type="text" name="title" value="{{$cardform->title ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Department</label>
                        <input type="text" name="department" value="{{$cardform->department ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Company</label>
                        <input type="text" name="company" value="{{$cardform->company ?? ''}}" />
                     </div>
                     <div class="color-input-container">
                        <label for="color">Color Card</label>
                        <input type="color" id="color" name="color" value="{{ $cardform->color }}" class="color-input" style="background-color: {{ $cardform->color }};" />
                     </div>
                     <div>
                        <label for="holder">Headline</label>
                        <input type="text" name="headline" value="{{$cardform->headline ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Email</label>
                        <input type="text" name="email" value="{{$cardform->email ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Phone</label>
                        <input type="text" name="phone" placeholder="+374 XX XXXXX" value="{{ $cardform->phone ?? '' }}" />
                     </div>
                     <div>
                        <label for="holder">Date</label>
                        <input type="date" name="date" value="{{$cardform->date ?? ''}}" />
                     </div>

                     <label for="holder">Make Public Your card</label>
                     <div class="panel">
                     <input type="checkbox" name="status" id="onoff" {{ $cardform->status ? 'checked' : '' }}>
                     <label for="onoff" class="toggle">
                           <span class="toggle-color"></span>
                     </label>
                     <span class="inner-panel"></span>

                     <!-- Hidden input to store the value -->
                     <input type="hidden" name="status" value="{{ $cardform->status ? '1' : '0' }}">
                     </div>
                     <a class="toggle-button" onclick="toggleSocialIcons()"> <i class="material-icons">Add</i> your social media </a>
                     <div class="social-icons-container" id="socialIcons">
                        <div class="wrapper">
                           @include('User.socel_media_icon')
                        </div>
                     </div>
                     @include('User.input_socel_media_for_edit_page')
                     <div class="full-button">
                        <div class="iq-button" style="display: flex; justify-content: space-around;">
                           <button type="submit" class="btn text-uppercase position-relative submit-button">
                              <span class="button-text">Update Your Card</span>
                              <i class="fa-solid fa-play"></i>
                           </button>
                        </div>
                     </div>
                  </form>
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
<script>
const fileUpload = (event) => {
  const files = event.target.files;
  const filesLength = files.length;
  if (filesLength > 0) {
    const imageSrc = URL.createObjectURL(files[0]);
    const imagePreviewElement = document.querySelector("#tb-image");
    imagePreviewElement.src = imageSrc;
    imagePreviewElement.style.display = "block";
  }
};
</script>
@endsection
