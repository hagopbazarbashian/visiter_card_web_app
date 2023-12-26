@extends('layout.app') @section('title'){{ 'User Edit Page' }}@endsection @section('home')
<main>
   <section id="card" class="card">
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
   </section>

   <form method="post" action="{{route('full_visiter_card_update',$cardform->id)}}" class="form">
      @csrf
      <div class="file-input-container">
         <label for="photo" class="file-input-button">Choose a Photo</label>
         <input type="file" name="photo" id="photo" class="file-input" onchange="previewImage(this)" /><br />
         <img id="image-preview" class="image-preview" alt="Image Preview" />
         @if (isset($cardform->photo))
         <p id="no-image-message" class="no-image-message">You have image</p>
         @else
         <p id="no-image-message" class="no-image-message" style="display: none;">You don't have an image.</p>
         @endif
      </div>
      <div>
         <label for="holder">Full Name</label>
         <input type="text" name="full_name" value="{{$cardform->full_name ?? 'Null'}}" />
      </div>
      <div>
         <label for="holder">Title</label>
         <input type="text" name="title" value="{{$cardform->title ?? 'Null'}}" />
      </div>
      <div>
         <label for="holder">Department</label>
         <input type="text" name="department" value="{{$cardform->department ?? 'Null'}}" />
      </div>
      <div>
         <label for="holder">Company</label>
         <input type="text" name="company" value="{{$cardform->company ?? 'Null'}}" />
      </div>
      <div class="color-input-container">
         <label for="color">Color Card</label>
         <input type="color" id="color" name="color" value="{{ $cardform->color }}" class="color-input" style="background-color: {{ $cardform->color }};" />
         <input type="text" id="color-code" name="color-code" class="color-code-input" placeholder="Color Code" value="{{ $cardform->color }}" oninput="updateColorBox()" />
      </div>
      <div>
         <label for="holder">Headline</label>
         <input type="text" name="headline" value="{{$cardform->headline ?? 'Null'}}" />
      </div>
      <div>
         <label for="holder">Email</label>
         <input type="text" name="email" value="{{$cardform->email ?? 'Null'}}" />
      </div>
      <div>
         <label for="holder">Phone</label>
         <input type="number" name="Phone" placeholder="+374 XX XXXXX" value="{{$cardform->Phone ?? 'Null'}}" />
      </div>
      <div>
          <label for="holder">Date</label>
          <input type="date" name="date" value="{{$cardform->date ?? 'Null'}}"/>
      </div>
      <a class="toggle-button" onclick="toggleSocialIcons()"> <i class="material-icons">Add</i> your social media </a>
      <div class="social-icons-container" id="socialIcons">
         <div class="wrapper">
            @include('User.socel_media_icon')
         </div>
         <!-- Add other social media icons as needed -->
      </div>
      @include('User.input_socel_media_for_edit_page')
      <div class="full-button">
         <div class="iq-button" style="display: flex; justify-content: space-around;">
            <button type="submit" class="btn text-uppercase position-relative">
               <span class="button-text">Update Your Card</span>
               <i class="fa-solid fa-play"></i>
            </button>
         </div>
      </div>
   </form>
</main>
<script></script>
@if($cardform->photo)
<script>
   // If there is a photo, display the preview
   document.addEventListener("DOMContentLoaded", function () {
      const photoInput = document.getElementById("photo");
      previewImage(photoInput);
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
@endif @endsection
