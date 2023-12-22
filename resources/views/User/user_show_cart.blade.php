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
      .custom-responsive-img {
      max-width: 100%;
      height: auto;
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
          <th scope="col">Title</th>
          <th scope="col">Department</th>
          <th scope="col">Headline</th>
          <th scope="col">Company</th>
          <th scope="col">Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Facebook Link</th>
          <th scope="col">Instagram Link</th>
          <th scope="col">linkedin Link</th>
          <th scope="col">Background Color</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($filteredCardforms as $key=>$filteredCardform)
         <tr>
          <td>{{$key+1}}</td>
          <td>{{$filteredCardform->full_name}}</td>
          <td>
            <img src="user_image/{{ $filteredCardform->photo ?? 'null' }}" class="custom-responsive-img" alt="User Image">
         </td>
         <td>{{$filteredCardform->title ?? 'null'}}</td>
         <td>{{$filteredCardform->department ?? 'null'}}</td>
         <td>{{ \Illuminate\Support\Str::limit($filteredCardform->headline, 40, '...' ?? 'null') }}</td>
         <td>{{$filteredCardform->company ?? 'null'}}</td>
         <td>{{$filteredCardform->email ?? 'null'}}</td>
         <td>{{$filteredCardform->phone ?? 'null'}}</td>
         <td>{{$filteredCardform->fb ?? 'null'}}</td>
         <td>{{$filteredCardform->ins ?? 'null'}}</td>
         <td>{{ $filteredCardform->link ?? 'null' }}</td>
         <td style="background-color: {{ $filteredCardform->color }};">{{ $filteredCardform->color }}</td>
         <td>
            <a href="{{ route('user-edit.edit', $filteredCardform->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
            <form action="{{ route('user-edit.destroy', $filteredCardform->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash-alt"></i> Delete</button>
            </form>
        </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
