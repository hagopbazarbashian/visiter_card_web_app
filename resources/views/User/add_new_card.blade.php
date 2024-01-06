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
            <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Information</a>
               </li>
            </ul>
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  <form id="myForm" method="post" action="{{route('add_card')}}" class="form yy" enctype="multipart/form-data">
                     @csrf
                     <h2 class="title">Add Your Card</h2>  
                     <div class="tb-container"> 
                        <div class="tb-img-view">
                           <img class="profile" id="tb-image" />
                        </div>
                        <label for="tb-file-upload">Upload Profile Image</label>
                        <input type="file" name="photo" id="tb-file-upload" accept="image/*" onchange="fileUpload(event);" />
                     </div>
                     <div> 
                        <label for="holder">Add Your Logo</label>
                        <input type="file" name="logo" accept="image/*" value="{{old('logo')}}" />
                     </div>
                     <div>
                        <label for="holder">Full Name</label>
                        <input type="text" name="full_name" value="{{old('full_name')}}" />
                     </div>
                     <div>
                        <label for="holder">Job Position</label>
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
                     </div>
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
                           <button type="submit" class="btn text-uppercase position-relative submit-button">
                              <span class="button-text">Add your card</span>
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
