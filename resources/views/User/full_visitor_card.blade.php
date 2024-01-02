@extends('user_card_layout.app') @section('title'){{ 'Profile' }}@endsection @section('user_card') @if($cardform->photo)
<style>
   #home .header-background {
      position: relative;
      display: block;
      width: 100%;
      height: 430px;
      background: url("{{ asset("user_image/" . $cardform->photo) }}") no-repeat;
      background-size: cover;
      background-position: center center;
      background-attachment: fixed;
      transform: translateY(-20px);
   }

</style>
@else
<style>
   #home .header-background {
      /*home background*/
      position: relative;
      display: block;
      width: 100%;
      height: 435px;
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
   .waves-effect{
       background-color: {{$cardform->color}} !important;
       width: 225px;
   }
   .btn.waves-effect-share {
           position: fixed;
           bottom: 0;
           left: 0;
           width: 100%;
           background-color:  {{$cardform->color}}; /* Set background color if needed */
           text-align: center;
           padding: 10px; /* Adjust padding as needed */
           z-index: 999;
       }
   .ic{
       background-color: {{$cardform->color}};
       border-radius: 50% !important;
       width: 30px;
       height: 30px;
       display: flex;
       /* text-align: center; */
       /* margin: 0px 0 0px 0; */
       justify-content: center !important;
       align-content: stretch;
       align-items: center;
   }
   .content{
       color:black;
   }

   .timeline-block .timeline-dot {
    /*timeline dot*/
    background: {{$cardform->color}};
    width: 50px;
    height: 50px;
    border-radius: 100%;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    z-index: 2;
    color: #fff;
    text-align: center;
    position: absolute;
    top: 5px;
    right: 2%;
}
.timeline-block .timeline-content {
    /*each timeline content*/
    position: relative;
    background: #fff;
    margin-right: 0;
    z-index: 1;
    margin-bottom: 5px;
    border-left: 5px solid {{$cardform->color}};
}
</style>
<div class="">
   <div class="">
      <div class="">
         <!-- V-CARD -->
         <div id="v-card" class="card">
            <!-- PROFILE PICTURE -->
            @if ($cardform->logo)
            <div id="profile" class="right">
                <img alt="profile-image" class="img-responsive" src="{{asset('logo/' . $cardform->logo)}}" />
                <div class="slant"></div>

                <!--EMPTY PLUS BUTTON-->
                <div class="btn-floating btn-large add-btn"><i class="material-icons">add</i></div>
             </div>
            @endif
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
               <div class="card-content">
                  <!-- ABOUT PARAGRAPH -->
                  <p style="color: black;">
                     {{$cardform->headline ?? ''}}
                  </p>
               </div>
            </div>
            <div id="about-btn" class="card-action">
               <div class="about-btn">
                  <!-- DOWNLOAD CV BUTTON -->
                  <a onclick="downloadVCard()" class="btn waves-effect">Save Contact</a>
                  <!-- CONTACT BUTTON -->
               </div>
            </div>
            <!-- CONTACT INFO -->
            <div class="infos">
               @include('user_card_layout.social_media_link')
            </div>
            @include('user_card_layout.other')
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
   function downloadVCard() {
      // Create a vCard content
      const vCardContent = `
        BEGIN:VCARD
        VERSION:3.0
        FN:John Doe
        EMAIL:john.doe@example.com
        TEL:+123456789
        END:VCARD`;

      // Create a Blob containing the vCard content
      const blob = new Blob([vCardContent], { type: "text/vcard" });

      // Create a link element to trigger the download
      const link = document.createElement("a");
      link.href = window.URL.createObjectURL(blob);
      link.download = "contact.vcf"; // Set the desired filename with .vcf extension
      link.click();
   }
</script>
/* For Share */
<script>
   function shareContact() {
      // Create a vCard content
      const vCardContent = `
BEGIN:VCARD
VERSION:3.0
FN:John Doe
EMAIL:john.doe@example.com
TEL:+123456789
END:VCARD`;

      // Create a Blob containing the vCard content
      const blob = new Blob([vCardContent], { type: "text/vcard" });

      // Create a temporary link element to get a URL for the Blob
      const link = document.createElement("a");
      link.href = window.URL.createObjectURL(blob);
      link.setAttribute("download", "contact.vcf"); // Set the desired filename with .vcf extension

      // Check if the Web Share API is supported
      if (navigator.share) {
         navigator
            .share({
               title: "Contact Information",
               text: "Download this contact",
               url: link.href,
            })
            .then(() => console.log("Contact shared successfully"))
            .catch((error) => console.error("Error sharing contact:", error));
      } else {
         // Fallback for browsers that do not support Web Share API
         link.click();
      }
   }
</script>
@endsection
