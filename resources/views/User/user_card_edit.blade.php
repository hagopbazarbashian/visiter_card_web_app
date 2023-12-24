@extends('layout.app')
@section('title'){{ 'User Edit Page' }}@endsection
@section('home')
<style>
   .file-input-container {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .file-input-button {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
  }

  .file-input {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 100px;
    cursor: pointer;
    opacity: 0;
  }

  .file-input:hover + .file-input-button {
    background-color: #2980b9;
  }

  .file-input:focus + .file-input-button {
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
  }

  .image-preview {
    max-width: 100px;
    max-height: 100px;
    margin-top: 10px;
    display: none;
  }

  .no-image-message {
    margin-top: 10px;
    color: #000; /* Set the text color to black */
  }


   





    .color-input-container {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .color-input {
    background-color: transparent;
    border: 2px solid #3498db;
    border-radius: 8px;
    padding: 8px;
    width: 50px;
    height: 30px;
    cursor: pointer;
    transition: border-color 0.3s ease-in-out;
  }

  .color-input:hover,
  .color-input:focus {
    border-color: #2980b9;
  }

  .color-code-input {
    padding: 8px;
    border: 2px solid #3498db;
    border-radius: 8px;
    width: 100px;
    font-size: 14px;
    color: #555;
  }
</style>
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
              <img src="{{ asset('user_image/' . $cardform->photo) }}">
              @else
              <img src="http://127.0.0.1:8000/assets/images/logo.png">
              @endif
            </div>
            <div class="card__footer">
                <!-- Your card footer content goes here -->
            </div>
        </section>
        <section class="card__back">
            <div class="card__image">
              @if($cardform->photo)
              <img src="{{ asset('user_image/' . $cardform->photo) }}">
              @else
              <img src="http://127.0.0.1:8000/assets/images/logo.png">
              @endif
            </div>
        </section>
    </section>

    <form  method="post" action="{{route('user-edit.update',$cardform->id)}}"class="form">
        @csrf
        @method('PUT')
       <div class="file-input-container">
        <label for="photo" class="file-input-button">Choose a Photo</label>
        <input type="file" name="photo" id="photo" class="file-input" onchange="previewImage(this)">
        <img id="image-preview" class="image-preview" alt="Image Preview">
        <p id="no-image-message" class="no-image-message" style="display: none;">You don't have an image.</p>
      </div>
      <div>
        <label for="holder">Full Name</label>
        <input  type="text" name="full_name" value="{{$cardform->full_name ?? 'Null'}}">
      </div>
      <div>
        <label for="holder">Title</label>
        <input  type="text" name="title" value="{{$cardform->title ?? 'Null'}}">
      </div>
      <div>
        <label for="holder">Department</label>
        <input  type="text" name="department" value="{{$cardform->department ?? 'Null'}}">
      </div>
      <div>
        <label for="holder">Company</label>
        <input  type="text" name="company" value="{{$cardform->company ?? 'Null'}}">
      </div>
      <div class="color-input-container">
        <label for="color">Color Card</label>
        <input type="color" id="color" name="color" value="{{ $cardform->color }}" class="color-input" style="background-color: {{ $cardform->color }};">
        <input type="text" id="color-code" name="color-code" class="color-code-input" placeholder="Color Code" value="{{ $cardform->color }}" oninput="updateColorBox()">
      </div>
      <div>
        <label for="holder">Headline</label>
        <input type="text" name="headline"  value="{{$cardform->headline ?? 'Null'}}">
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
        <label for="holder">Facebook profile Link</label>
        <input type="text" id="facebookProfile" name="fb" oninput="validateAndToggleInput(this.value)" value="{{$cardform->fb  ?? 'Null' }}" />
        <span id="error-message" class="error-message"></span>
      </div>
      <div>
        <label for="holder">instagram profile Link</label>
        <input type="text" id="instagramProfile" name="ins" oninput="validateAndToggleInstagramInput(this.value)" value="{{$cardform->fb  ?? 'Null' }}" />
        <span id="error-messageins" class="error-message"></span>
      </div>
      <div>
        <label for="holder">linkedin profile Link</label>
        <input type="text" id="linkedinProfile" name="ins" oninput="validateAndToggleLinkedInInput(this.value)" value="{{$cardform->fb  ?? 'Null' }}" />
        <span id="error-messagelinkedin" class="error-message"></span>
      </div>
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
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('photo');
    previewImage(photoInput);
  });

  function previewImage(input) {
    const preview = document.getElementById('image-preview');
    const noImageMessage = document.getElementById('no-image-message');
    const file = input.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
        noImageMessage.style.display = 'none';
      };

      reader.readAsDataURL(file);
    } else {
      preview.style.display = 'none';
      noImageMessage.style.display = 'block';
    }
  }



  function updateColorBox() {
    const colorInput = document.getElementById('color');
    const colorCodeInput = document.getElementById('color-code');
    
    // Set the background color of the color box
    colorInput.style.backgroundColor = colorCodeInput.value;
  }
</script>
  @if($cardform->photo)
  <script>
    // If there is a photo, display the preview
    document.addEventListener('DOMContentLoaded', function() {
      const photoInput = document.getElementById('photo');
      previewImage(photoInput);
    });
  </script>
@endif

@endsection
