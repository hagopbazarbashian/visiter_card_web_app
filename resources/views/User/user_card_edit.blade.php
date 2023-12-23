@extends('layout.app')
@section('title'){{ 'User Edit Page' }}@endsection
@section('home')
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
                <img src="http://127.0.0.1:8000/assets/images/logo.png">
            </div>
            <div class="card__footer">
                <!-- Your card footer content goes here -->
            </div>
        </section>
        <section class="card__back">
            <div class="card__image">
                <img src="http://127.0.0.1:8000/assets/images/logo.png">
            </div>
        </section>
    </section>

    <form  method="post" action="{{route('user-edit.update',$cardform->id)}}"class="form">
        @csrf
        @method('PUT')
      <div>
        <label for="number">Add Photo</label>
        <input type="file" name="photo">
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
      <div>
        <label for="holder">Color Card</label>
        <input type="color" name="color" value="{{$cardform->color}}" style="background-color: {{$cardform->color}};">
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
        <input type="number" name="Phone" placeholder="(555) 555-555" id="phoneInput" value="{{$cardform->Phone ?? 'Null'}}" />
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
@endsection
