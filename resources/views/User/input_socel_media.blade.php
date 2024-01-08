<!-- Your existing form fields go here -->
<div class="social-media-input" id="facebookInput">
   <label for="facebookUsername">Facebook Link</label>
   <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook Link" value="{{old('facebook')}}"/>
   <label for="facebookUsername">Display name</label>
   <input type="text" id="facebookUsername" class="myInput" name="facebookprofilename" placeholder="Display name" value="{{old('facebookprofilename')}}"/>
   <span id="toggleIcon" style="cursor: pointer; font-weight: bold;"><i class="fa fa-plus fa-1x" aria-hidden="true" style="color:#68b7e2"></i></span>
</div>

<!-- First social media input div -->
<div class="social-media-input" id="facebookInput1">
    <label for="facebookUsername1">Facebook Second Link</label>
    <input type="text" id="facebookUsername1" name="facebook2" placeholder="Enter your Facebook Second Link" value="{{old('facebook2')}}"/>
    <label for="facebookProfileName1">Second Display name</label>
    <input type="text" class="myInput" id="facebookProfileName1" name="facebookprofilename2" placeholder="Second Display name" value="{{old('facebookprofilename2')}}"/>
</div>

<!-- Second social media input div -->
<div class="social-media-input" id="facebookInput2">
    <label for="facebookUsername2">Facebook Third Link</label>
    <input type="text" id="facebookUsername2" name="facebook3" placeholder="Enter your Facebook Third Link" value="{{old('facebook3')}}"/>
    <label for="facebookProfileName2">Third Display name</label>
    <input type="text" class="myInput" id="facebookProfileName2" name="facebookprofilename3" placeholder="Third Display name" value="{{old('facebookprofilename3')}}"/>
</div>

<div class="social-media-input" id="pinterestInput">
   <label for="pinterestUsername">Pinterest Username</label>
   <input type="text" class="myInput" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest" value="{{old('pinterest')}}"/>
</div>
<div class="social-media-input" id="twitterInput">
   <label for="twitterUsername">Twitter Username</label>
   <input type="text" class="myInput" id="twitterUsername" name="twitter" placeholder="Enter your Twitter" value="{{old('twitter')}}"/>
</div>
<div class="social-media-input" id="instagramInput">
   <label for="instagramUsername">Instagram Username</label>
   <input type="text" class="myInput" id="instagramUsername" name="instagram" placeholder="Enter your Instagram" value="{{old('instagram')}}"/>
   <span id="toggleIcon2" style="cursor: pointer; font-weight: bold;"><i class="fa fa-plus fa-1x" aria-hidden="true" style="color:#68b7e2"></i></span>
</div>
<div class="social-media-input" id="instagram1">
    <label for="instagramUsername">Instagram Second Username</label>
    <input type="text"  class="myInput" id="instagramUsername" name="instagram2" placeholder="Enter your Second Instagram" value="{{old('instagram2')}}"/>
 </div>
 <div class="social-media-input" id="instagram2">
    <label for="instagramUsername">Instagram Third Username</label>
    <input type="text" class="myInput" id="instagramUsername" name="instagram3" placeholder="Enter your Third Instagram" value="{{old('instagram3')}}"/>
 </div>
<div class="social-media-input" id="whatsappInput">
   <label for="whatsappUsername">WhatsApp Number</label>
   <input type="tel" class="myInput" id="whatsappUsername" name="whatsapp" placeholder="+374 XX XXXXX" value="{{ old('whatsapp') }}" pattern="[+0-9]+" title="Please enter a valid WhatsApp number (only + and numbers are allowed)" inputmode="tel" />
</div>
<div class="social-media-input" id="youtubeInput">
   <label for="youtubeUsername">Youtube Username</label>
   <input type="text" class="myInput" id="youtubeUsername" name="youtube" placeholder="Enter your Youtube" value="{{old('youtube')}}"/>
</div>

<div class="social-media-input" id="tiktokInput">
   <label for="tiktokUsername">Tiktok Username</label>
   <input type="text" class="myInput" id="tiktokUsername" name="tiktok" placeholder="Enter your Tiktok" value="{{old('tiktok')}}"/>
</div>
<div class="social-media-input" id="linkedinInput">
   <label for="linkedinUsername">Linkedin Username</label>
   <input type="text" class="myInput" id="linkedinUsername" name="linkedin" placeholder="Enter your Linkedin" value="{{old('linkedin')}}"/>
</div>
<div class="social-media-input" id="snapchatInput">
   <label for="snapchatUsername">Snapchat Username</label>
   <input type="text" class="myInput" id="snapchatUsername" name="snapchat" placeholder="Enter your Snapchat" value="{{old('snapchat')}}"/>
</div>
<div class="social-media-input" id="telegramInput">
   <label for="telegramUsername">Telegram Username</label>
   <input type="text" class="myInput" id="telegramUsername" name="telegram" placeholder="Enter your Telegram" value="{{old('telegram')}}"/>
</div>
<div class="social-media-input" id="discordInput">
   <label for="discordUsername">Discord Username</label>
   <input type="text" class="myInput" id="discordUsername" name="discord" placeholder="Enter your Discord" value="{{old('discord')}}"/>
</div>
<div class="social-media-input" id="skypeInput">
   <label for="skypeUsername">Skype Username</label>
   <input type="text" class="myInput" id="skypeUsername" name="skype" placeholder="Enter your Skype" value="{{old('skype')}}"/>
</div>
<div class="social-media-input" id="paypalInput">
   <label for="paypalUsername">Paypal Username</label>
   <input type="text" class="myInput" id="paypalUsername" name="paypal" placeholder="Enter your Paypal" value="{{old('paypal')}}"/>
</div>

<div class="social-media-input" id="spotifyInput">
   <label for="spotifyUsername">Spotify Username</label>
   <input type="text" class="myInput" id="spotifyUsername" name="spotify" placeholder="Enter your Spotify" value="{{old('spotify')}}"/>
</div>
<div class="social-media-input" id="applemusicInput">
   <label for="applemusicUsername">Applemusic Username</label>
   <input type="text"  class="myInput" id="applemusicUsername" name="applemusic" placeholder="Enter your Applemusic" value="{{old('applemusic')}}"/>
</div>
<div class="social-media-input" id="soundcloudInput">
   <label for="soundcloudUsername">Soundcloud Username</label>
   <input type="text" class="myInput" id="soundcloudUsername" name="soundcloud" placeholder="Enter your Soundcloud" value="{{old('soundcloud')}}"/>
</div>
<div class="social-media-input" id="behanceInput">
   <label for="behanceUsername">Behance Username</label>
   <input type="text" class="myInput" id="behanceUsername" name="behance" placeholder="Enter your Behance" value="{{old('behance')}}"/>
</div>
<div class="social-media-input" id="twitchInput">
   <label for="twitchUsername">Twitch Username</label>
   <input type="text" class="myInput" id="twitchUsername" name="twitch" placeholder="Enter your Twitch" value="{{old('twitch')}}"/>
</div>

<div class="social-media-input" id="linkInput">
   <label for="linkUsername">Link</label>
   <input type="text" id="linkUsername" name="link" placeholder="Enter your Link" value="{{old('link')}}" />
</div>
<div class="social-media-input" id="websiteInput">
   <label for="websiteUsername">Website Link</label>
   <input type="text" id="twitchUsername" name="website" placeholder="Enter your Website" value="{{old('website')}}" />
</div>
{{-- Start Addres --}}
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://api.opencagedata.com/geocode/v1/js?key=1de4ecc69ce340e4ba918ae16bffed6a"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<div class="social-media-input" id="addressInput">
   <label for="addressInput">Address</label>
   <input type="text" id="addressInput" name="address" placeholder="Enter your Address" value="{{ old('address') }}" onclick="initMap()" />
   <div id="map" style="height: 300px;"></div>
</div>

<script>
function initMap() {
   var map = L.map('map').setView([0, 0], 8);

   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
   }).addTo(map);

   var input = document.getElementById('addressInput');
   var marker;

   input.addEventListener('focus', function () {
      map.invalidateSize();
      if (!marker) {
         marker = L.marker([0, 0]).addTo(map);
      }
   });

   input.addEventListener('input', function () {
      var inputValue = input.value;

      if (inputValue) {
         // Use OpenCage Geocoding API to get coordinates based on the address
         opencage
            .geocode({ q: inputValue })
            .then(function (result) {
               if (result && result.results && result.results.length > 0) {
                  var coordinates = [
                     result.results[0].geometry.lat,
                     result.results[0].geometry.lng
                  ];

                  marker.setLatLng(coordinates);
                  map.setView(coordinates, 17);
               }
            })
            .catch(function (error) {
               console.error('Error fetching coordinates:', error);
            });
      }
   });
}
</script>
{{-- End addres --}}
<div class="social-media-input" id="pdfInput">
   <label for="pdfFile">PDF File</label>
   <input type="file" id="pdffile" name="doc" accept=".pdf"  value="{{old('doc')}}"/>
</div>

<script>
   var inputs = document.querySelectorAll('.myInput');

   inputs.forEach(function(input) {
     input.addEventListener('input', function(event) {
       // Check if the input value is a link
       if (isLink(event.target.value)) {
         // Handle the error, for example, by displaying a message
         alert('Error: Links are not allowed!');
         // Optionally, you can clear the input field
         event.target.value = '';
       }
     });
   });

   // Function to check if a string is a link
   function isLink(value) {
     // Simple check for http://, https://, or www.
     return value.includes('http://') || value.includes('https://') || value.includes('www.');
   }
 </script>
