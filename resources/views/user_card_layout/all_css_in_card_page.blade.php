 @if($cardform->photo)
<style>
   #home .header-background {
      position: relative;
      display: block;
      width: 100%;
      height: 430px;
      background: url("{{ asset("user_image/" . $cardform->photo) }}") no-repeat;
      background-size: 100%;
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
         top: 135px;
      }

      .your-div-class {
         width: 100%;
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
      width: 299px;
      height: 50px;
      font-weight: 900;
      border-top-left-radius: 20px 20px !important;
      border-top-right-radius: 20px 20px !important;
      border-bottom-left-radius: 20px 20px !important;
      border-bottom-right-radius: 20px 20px !important;
   }
   .btn.waves-effect-share {
           position: fixed;
           bottom: 0;
           left: 0;
           width: 100%;
           height: 45px;
           font-weight: 900;
           background-color:  {{$cardform->color}}; /* Set background color if needed */
           text-align: center;
           padding: 10px; /* Adjust padding as needed */
           z-index: 999;
          margin: 0 0 9px 0;
         border-top-left-radius: 20px 20px !important;
         border-top-right-radius: 20px 20px !important;
         border-bottom-left-radius: 20px 20px !important;
         border-bottom-right-radius: 20px 20px !important;
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
/*scroll to top button*/
#scrollup {
  color: #fff;
  height: 45px;
  width: 45px;
  cursor: pointer;
  font-size: 28px;
  background: {{$cardform->color}};
  border: 1px solid : {{$cardform->color}};
  text-align: center;
  position: fixed;
  bottom: 21px;
  right: 18px;
  z-index: 5;
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  display: none;
  transition: .3s;
}
</style>

