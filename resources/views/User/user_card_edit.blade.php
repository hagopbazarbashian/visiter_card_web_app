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

    <form class="form">
      <div>
        <label for="number">Card Number</label>
        <input id="number" type="number">
      </div>
      <div>
        <label for="holder">Card Holder</label>
        <input id="holder" type="text">
      </div>
      <div>
        <label for="holder">Card Holder</label>
        <input id="holder" type="text">
      </div>
      <div>
        <label for="holder">Card Holder</label>
        <input id="holder" type="text">
      </div>
      <div>
        <label for="holder">Card Holder</label>
        <input id="holder" type="text">
      </div>
      <div>
        <label for="holder">Card Holder</label>
        <input id="holder" type="text">
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
