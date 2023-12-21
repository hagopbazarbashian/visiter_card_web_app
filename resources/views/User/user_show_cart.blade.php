@extends('layout.app')
@section('title'){{ 'Welcome User' }}@endsection
@section('home')
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
               <a href="{{route('home')}}" class="btn text-uppercase position-relative">
                  <span class="button-text">Create New card</span>
                  <i class="fa-solid fa-play"></i>
               </a>
            </div>
         </div>
      </div>
   </div>

   <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">User Name</th>
          <th scope="col">Photo</th>
          <th scope="col">Full Name</th>
          <th scope="col">Title</th>
          <th scope="col">Department</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Facebook Link</th>
          <th scope="col">Instagram Link</th>
          <th scope="col">linkedin Link</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
