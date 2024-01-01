@extends('user_card_layout.app') @section('title'){{ 'Profile' }}@endsection @section('user_card') @if($cardform->photo)
<style>
   #home .header-background {
      /*home background*/
      position: relative;
      display: block;
      width: 100%;
      height: 370px;
      background: url("{{ asset("user_image/" . $cardform->photo) }}") no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
   }
</style>
@else
<style>
   #home .header-background {
      /*home background*/
      position: relative;
      display: block;
      width: 100%;
      height: 370px;
      background: url("{{ asset("assets/images/download.jpg") }}") no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
   }
</style>
@endif
<style>
   #v-card-holder #v-card {
      background:#fff;
      box-shadow: none;
   }

   .your-div-class {
      width: 100%;
      box-shadow: 0 10px 4px rgba(0, 0, 0, 0.1); /* Adjust the shadow as needed */
      padding: 10px;
      margin: 10px;
      /* Add any other styling as needed */
   }
   .card .card-action {
      display: flex;
      justify-content: center !important;
   }
   #wave-design {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px; /* Adjust the height based on your design */
}

svg {
    fill: #fff; /* Adjust the color of the wave */

}

.row {
    margin-right: 0 !important;
    margin-left: 0 !important;
}
</style>
<div class="container">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <!-- V-CARD -->
         <div id="v-card" class="card">
            <!-- PROFILE PICTURE -->
            <div id="profile" class="right">
                <img alt="profile-image" class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAHXPluq6GtTRPDIHRv5kJPy86uFjp5sO7hg&usqp=CAU" />
                <div class="slant"></div>

                <!--EMPTY PLUS BUTTON-->
                <div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>
            </div>
            <!--VIDEO CLOSE BUTTON-->
            <!--<div id="close-btn" class="btn-floating icon-close">
                    <i class="fa fa-close"></i>
                </div>-->

            <div class="card-content">
               <!-- NAME & STATUS -->
               <div class="info-headings">
                  <h4 class="text-uppercase left">{{$cardform->full_name}}</h4>
                  <h6 class="text-capitalize left">{{$cardform->title ?? ''}} @if($cardform->company) & @endif {{$cardform->company ?? '' }}</h6>
               </div>
               @if ($cardform->color == '#000000' )
               <div class="card-content">
                  <!-- ABOUT PARAGRAPH -->
                  <p style="color: #fff;">
                     Hello! I’m John Doe. Senior Web Developer with over 13 years of experience specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects.Having an in-depth
                     knowledge including advanced HTML5, CSS, CSS3, SASS, LESS, JSON, XML, Java, JavaScript, JQuery, Angular JS. Strong background in management and leadership.
                  </p>
               </div>
               @else
               <!-- ABOUT PARAGRAPH -->
               <p style="color: #fff;">
                  Hello! I’m John Doe. Senior Web Developer with over 13 years of experience specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects.Having an in-depth knowledge
                  including advanced HTML5, CSS, CSS3, SASS, LESS, JSON, XML, Java, JavaScript, JQuery, Angular JS. Strong background in management and leadership.
               </p>
            </div>
            @endif
            <div id="about-btn" class="card-action">
               <div class="about-btn">
                  <!-- DOWNLOAD CV BUTTON -->
                  <a onclick="saveContact()" class="btn waves-effect">Save Contact</a>
                  <!-- CONTACT BUTTON -->
                  <a href="#contact" class="btn waves-effect">Contact Me</a>
               </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="infos">
               <ul class="profile-list">
                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="material-icons">email</i></span>
                        <a href="mailto:{{ $cardform->email }}"><span class="content">{{$cardform->email ?? 'Not have Email'}}</span></a>
                     </li>
                  </div>
                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="material-icons">language</i></span>
                        <a href="{{ $cardform->socelmedia->website }}" target="_blank"><span class="content">{{$cardform->socelmedia->website ?? 'Not have Website'}}</span></a>
                     </li>
                  </div>
                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-skype" aria-hidden="true"></i></span>
                        <a href="{{ $cardform->socelmedia->skype }}" target="_blank"><span class="content">{{$cardform->socelmedia->skype ?? 'Not have Website'}}</span></a>
                     </li>
                  </div>
                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="material-icons">phone</i></span>
                        <a href="tel:{{ $cardform->phone }}"><span class="content">{{ $cardform->phone ?? ''}}</span></a>
                     </li>
                  </div>
                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-facebook"></i></span>
                        <a href="{{ $cardform->socelmedia->facebook }}"><span class="content">Facebook Profile</span></a>
                     </li>
                  </div>

                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-pinterest"></i></span>
                        <a href="{{ $cardform->socelmedia->pinterest }}"><span class="content">pinterest Profile</span></a>
                     </li>
                  </div>

                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-twitter"></i></span>
                        <a href="{{ $cardform->socelmedia->twitter }}"><span class="content">twitter Profile</span></a>
                     </li>
                  </div>

                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-instagram"></i></span>
                        <a href="{{ $cardform->socelmedia->instagram }}"><span class="content">instagram Profile</span></a>
                     </li>
                  </div>

                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-whatsapp"></i></span>
                        <a href="https://api.whatsapp.com/send?phone={{ $cardform->socelmedia->whatsapp }}"><span class="content">whatsapp</span></a>
                     </li>
                  </div>

                  <div class="your-div-class">
                     <li class="clearfix">
                        <span class="title"><i class="fa fa-youtube"></i></span>
                        <a href="{{ $cardform->socelmedia->youtube }}"><span class="content">youtube Profile</span></a>
                     </li>
                  </div>

                  {{--
                  <li class="clearfix">
                     <span class="title"><i class="material-icons">place</i></span>
                     <span class="content">LampStreet 34/3, London, UK</span>
                  </li>
                  --}}
               </ul>
            </div>
            <!--LINKS-->
            {{--
            <div class="links">
               <!-- FACEBOOK-->
               <a href="{{ $cardform->socelmedia->facebook }}" target="_blank" id="first_one" class="social btn-floating indigo"><i class="fa fa-facebook"></i></a>
               <!-- TWITTER-->
               <a href="{{ $cardform->socelmedia->facebook }}" target="_blank" class="social btn-floating blue"><i class="fa fa-twitter"></i></a>
               <!-- nstagram-->
               <a href="{{ $cardform->socelmedia->instagram }}" target="_blank" class="social btn-floating red"><i class="fa fa-instagram"></i></a>
               <!-- LINKEDIN-->
               <a href="{{ $cardform->socelmedia->linkedin }}" target="_blank" class="social btn-floating blue darken-3"><i class="fa fa-linkedin"></i></a>
               <!-- pinterest-->
               <a href="{{ $cardform->socelmedia->pinterest }}" target="_blank" class="social btn-floating orange darken-3"><i class="fa fa-pinterest"></i></a>
               <!-- whatsapp-->
               <a href="https://api.whatsapp.com/send?phone={{ $cardform->socelmedia->whatsapp }}" target="_blank" class="social btn-floating green darken-3"><i class="fa fa-whatsapp"></i></a>
               <!-- youtube-->
               <a href="{{ $cardform->socelmedia->youtube }}" target="_blank" class="social btn-floating red darken-3"><i class="fa fa-youtube"></i></a>
               <!-- tiktok-->
               <a href="{{ $cardform->socelmedia->tiktok }}" target="_blank" class="social btn-floating Aqua darken-3"><i class="fa fa-tiktok"></i></a>
            </div>
            --}}
         </div>
         <!--HTML 5 VIDEO-->
         <!-- <video id="html-video" class="video" poster="images/poster/poster.jpg" controls>
                    <source src="videos/........" type="video/webm">
                    <source src="videos/..........." type="video/mp4">
                </video>-->
      </div>
   </div>
</div>
<script>
   function saveContact() {
      // Check if the Contacts API is supported
      if ("contacts" in navigator && "ContactsManager" in window) {
         // Create a contact
         const contact = new Contact({
            name: ["John", "Doe"],
            email: ["john.doe@example.com"],
            phoneNumber: ["+123456789"],
         });

         // Save the contact
         navigator.contacts
            .select(["name", "email", "phoneNumber"], { multiple: false })
            .then((contacts) => {
               // The user has selected a contact, now save it
               const saveContactPromise = navigator.contacts.save(contact);
               saveContactPromise
                  .then(() => {
                     console.log("Contact saved successfully");
                  })
                  .catch((error) => {
                     console.error("Error saving contact:", error);
                  });
            })
            .catch((error) => {
               console.error("Error selecting contact:", error);
            });
      } else {
         alert("Contacts API is not supported in this browser.");
      }
   }
</script>

@endsection
