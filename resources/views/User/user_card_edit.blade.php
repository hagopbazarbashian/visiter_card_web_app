@extends('layout.app') @section('title'){{ 'Edit Your Your Card' }}@endsection @section('home')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
.panel {
	position:relative;
	width: 105px;
	height: 90px;
	 margin: -30px auto 30px;
}

input[type=checkbox]{
  margin-left: -999px;
}

input[type=checkbox] + label {
	background: #efefef;
	position: absolute;
	border:1px solid #8e8e8e;
	box-shadow: 1px 2px 1px rgba(0,0,0, 0.2);
	background: rgba(255,255,255,1);
	background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(158,155,158,1) 24%, rgba(102,102,102,1) 52%, rgba(235,235,235,1) 70%, rgba(214,214,214,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(24%, rgba(158,155,158,1)), color-stop(52%, rgba(102,102,102,1)), color-stop(70%, rgba(235,235,235,1)), color-stop(100%, rgba(214,214,214,1)));
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(158,155,158,1) 24%, rgba(102,102,102,1) 52%, rgba(235,235,235,1) 70%, rgba(214,214,214,1) 100%);
	background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(158,155,158,1) 24%, rgba(102,102,102,1) 52%, rgba(235,235,235,1) 70%, rgba(214,214,214,1) 100%);
	background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(158,155,158,1) 24%, rgba(102,102,102,1) 52%, rgba(235,235,235,1) 70%, rgba(214,214,214,1) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(158,155,158,1) 24%, rgba(102,102,102,1) 52%, rgba(235,235,235,1) 70%, rgba(214,214,214,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#d6d6d6', GradientType=0 );

}

.toggle{
	display: block;
  position: relative;
	left:0;
	width: 50px;
	height: 50px;
  margin-top: 1px;
	border-radius: 50%;
	cursor: pointer;
	-webkit-transition: left .3s linear;
	-moz-transition: left .3s linear;
	-ms-transition: left .3s linear;
	-o-transition: left .3s linear;
	transition: left .3s linear;
}

input[type=checkbox]:checked + label{
	left:44px;
}

.toggle-color{
	display:block;
	position: relative;
	top: 8px;
	left: 8px;
	width: 35px;
	height: 35px;
	border-radius: 100%;
	box-shadow: inset 0px 0px 15px rgba(0,0,0, 0.6), -1px -2px 2px rgba(138,138,138,0.8);
}

#onoff + label .toggle-color {
	background:#fc0000;
}
#onoff:checked + label .toggle-color {
	background:#a2fd00;
}

.inner-panel {
	width: 95px;
	height: 52px;
	padding:0;
	margin:0;
	display: block;
	background: #e4e4e4;
	border-radius: 25px;
	border: 1px solid #c1c2c2;
	box-shadow: inset 0px 0px 12px rgba(0,0,0, 0.2), 0px 1px 1px #fff;
}

.inner-panel:after{
	position: absolute;
	top:40px;
	color: #bdbdbd;
	text-shadow: 1px 1px 1px #efefef;
}
#onoff:checked + label ~ .inner-panel:after {
	content: "ON";
	right:-30px;
}
#onoff + label ~ .inner-panel:after {
	content: "OFF";
	right:120px;
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
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                  {{-- <section id="card" class="card">
                     <div id="highlight"></div>
                     <section class="card__front">
                        <div class="card__header">
                           <div>{{ $cardform->full_name }}</div>
                        </div>
                        <div id="card_number" class="card__number">
                           <!-- Your card number content goes here -->
                        </div>
                        <div class="card__image">
                           @if($cardform->photo)
                           <img src="{{ asset('/assets/images/logo.png') }}" />
                           @else
                           <img src="{{ asset('/assets/images/logo.png') }}" />
                           @endif
                        </div>
                        <div class="card__footer">
                           <!-- Your card footer content goes here -->
                        </div>
                     </section>
                     <section class="card__back">
                        <div class="card__image">
                           @if($cardform->photo)
                           <img src="{{ asset('/assets/images/logo.png') }}" />
                           @else
                           <img src="{{ asset('/assets/images/logo.png') }}" />
                           @endif
                        </div>
                     </section>
                  </section> --}}
                  <form method="post" action="{{route('full_visiter_card_update',$cardform->id)}}" class="form" enctype="multipart/form-data">
                     @csrf
                    <div class="tb-container">
                        <div class="tb-img-view">
                           @if ($cardform->photo)
                            <img src="{{ asset('user_image/' . $cardform->photo) }}"/>
                           @endif
                           <img class="profile" id="tb-image" />
                        </div>
                        <label for="tb-file-upload">Upload Profile Image</label>
                        <input type="file" name="photo" id="tb-file-upload" accept="image/*" onchange="fileUpload(event);" />
                     </div>
                     <div>
                        <label for="holder">Add Your Logo</label>
                        <input type="file" name="logo" accept="image/*" value="{{$cardform->logo ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Full Name</label>
                        <input type="text" name="full_name" value="{{$cardform->full_name ?? ''}}" />
                     </div>
                     <div>
                        <label for="holder">Professional</label>
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
