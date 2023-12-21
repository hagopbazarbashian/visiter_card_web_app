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
               <a href="#" class="btn text-uppercase position-relative">
                  <span class="button-text">Show Your card</span>
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
               {{-- <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false"></a>
               </li> --}}
            </ul>
            <div class="tab-content px-0">
               <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                <form  method="post" action="{{ route('login_now') }}" onsubmit="return validateForm()">
                    @csrf
                    <img id="imagePreview" class="image-preview">
                      <div class="mb-3">
                          <label class="text-white fw-500 mb-2">Add Photo</label>
                          <input type="file" id="fileInput" name="photo" value="{{old('photo')}}" onchange="validateFile(event)" placeholder="Add Photo">
                      </div>
                      <div class="mb-3">
                          <label class="text-white fw-500 mb-2">Full Name</label>
                          <input type="text" name="full_name" class="form-control rounded-0" value="{{old('full_name')}}" placeholder="Full Name">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Title</label>
                        <input type="text" name="title" class="form-control rounded-0" value="{{old('title')}}" placeholder="Title">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Department</label>
                        <input type="text" name="department" class="form-control rounded-0" value="{{old('department')}}" placeholder="Department">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Company</label>
                        <input type="text" name="company" class="form-control rounded-0" value="{{old('company')}}" placeholder="Company">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Color Card</label>
                        <input type="color" id="colorInput" name="color" onchange="updateColor(event)" value="{{old('color')}}" placeholder="Color Card">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Headline</label>
                        <textarea type="text" name="headline" class="form-control rounded-0" value="{{old('headline')}}" placeholder="Headline"></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Email</label>
                        <input type="text" name="email" class="form-control rounded-0" value="{{old('email')}}">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Phone</label>
                        <input type="text" name="phone" class="form-control rounded-0" id="phoneInput" placeholder="(555) 555-555" value="{{old('phone')}}">
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Facebook profile Link</label>
                        <input type="text" id="facebookProfile" name="fb" class="form-control rounded-0" oninput="validateAndToggleInput(this.value)" value="{{old('fb')}}"  placeholder="Facebook profile Link">
                        <span id="error-message" class="error-message"></span>
                      </div>
                      <div class="mb-3">
                        <label class="text-white fw-500 mb-2">instagram profile Link</label>
                        <input type="text" id="instagramProfile" name="ins" class="form-control rounded-0" oninput="validateAndToggleInstagramInput(this.value)" value="{{old('ins')}}" placeholder="instagram profile Link">
                        <span id="error-messageins" class="error-message"></span>
                      </div>
                      {{-- <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Facebook profile Link</label>
                        <input type="text" id="facebookProfile" name="fb" class="form-control rounded-0" oninput="validateAndToggleInput(this.value)">
                        <span id="error-message" class="error-message"></span>
                      </div> --}}

                      <div class="full-button">
                      <div class="iq-button"style="display: flex;justify-content: space-around;">
                          <button type="submit" class="btn text-uppercase position-relative">
                               <span class="button-text">Submit</span>
                               <i class="fa-solid fa-play"></i>
                          </button>
                      </div>
                      </div>
                  </form>

               </div>
               <div id="watchlist" class="tab-pane animated fadeInUp" role="tabpanel">
                  <div class="overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between my-4">
                        <h5 class="main-title text-capitalize mb-0">My watchlist</h5>
                     </div>
                     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 1</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 2</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Private</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 3</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 4</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="text-center">
                        <div class="iq-button">
                           <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                              <span class="button-text">Create Watchlist</span>
                              <i class="fa-solid fa-play"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="favorites" class="tab-pane animated fadeInUp" role="tabpanel">
                  <div class="overflow-hidden">
                     <div class="d-flex align-items-center justify-content-between my-4">
                        <h5 class="main-title text-capitalize mb-0">My favourite</h5>
                     </div>
                     <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 1</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 2</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Private</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 3</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 4</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 5</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Private</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">2 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 6</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col mb-4">
                           <div class="watchlist-warpper card-hover-style-two">
                              <div class="block-images position-relative w-100">
                                 <div class="img-box">
                                    <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                    <img src="./assets/images/movies/playlist/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0" />
                                 </div>
                                 <div class="card-description">
                                    <h5 class="text-capitalize fw-500"><a href="">Play List 7</a></h5>
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-solid fa-earth-americas text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">Public</span>
                                       </div>
                                       <div class="d-flex align-items-center gap-1 font-size-12">
                                          <i class="fa-regular fa-eye text-primary"></i>
                                          <span class="text-body fw-semibold text-capitalize">50 Views</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="text-center">
                        <div class="iq-button">
                           <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                              <span class="button-text">Create Playlist</span>
                              <i class="fa-solid fa-play"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content border-0">
         <div class="modal-header border-0">
            <div>
               <h1 class="modal-title text-capitalize fs-5 fw-500">Create new Playlist</h1>
               <p class="mb-0">Please fill in all information below to create new playlist.</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form>
               <div class="form-group">
                  <label class="text-white fw-500 mb-2">Name *</label>
                  <input type="text" class="form-control" />
               </div>
               <div class="form-group">
                  <label class="text-white fw-500 mb-2">Description</label>
                  <textarea class="form-control" cols="5"></textarea>
               </div>
               <div class="form-group">
                  <label class="text-white fw-500 mb-2">Privacy</label>
                  <select class="form-control">
                     <option>Public</option>
                     <option>Private</option>
                  </select>
               </div>
               <div class="form-group">
                  <label class="text-white fw-500">Playlist Thumbnail</label>
                  <small class="d-block my-2">Support *.webp, *webp, *.gif, *.webp. Maximun upload file size: 5mb.</small>
                  <input type="file" class="form-control" />
               </div>
               <div class="form-group d-flex align-items-center gap-3">
                  <button class="btn btn-sm btn-light text-uppercase fw-medium">cancel</button>
                  <button class="btn btn-sm btn-primary text-uppercase fw-medium">save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
