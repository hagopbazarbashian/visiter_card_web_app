
<!-- Your existing form fields go here -->
@if ($socelmedia->facebook > 0) 
<div class="" id="facebookInput">
   <label for="facebookUsername">Facebook Username</label>
   <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook profile link" value="{{ $socelmedia->facebook ?? '' }}" />
   <label for="facebookUsername">Display name</label>
   <input type="text" id="facebookUsername" name="facebookprofilename" placeholder="Display name" value="{{ $socelmedia->facebookprofilename ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="facebookInput">
   <label for="facebookUsername">Facebook Username</label>
   <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook profile link" value="{{ $socelmedia->facebook ?? '' }}" />
   <label for="facebookUsername">Display name</label>
   <input type="text" id="facebookUsername" name="facebookprofilename" placeholder="Display name" value="{{ $socelmedia->facebookprofilename ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->pinterest > 0)
<div class="" id="pinterestInput">
   <label for="pinterestUsername">Pinterest Username</label>
   <input type="text" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest profile" value="{{ $socelmedia->pinterest ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="pinterestInput">
   <label for="pinterestUsername">Pinterest Username</label>
   <input type="text" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest profile" value="{{ $socelmedia->pinterest ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->twitter > 0)
<div class="" id="twitterInput">
   <label for="twitterUsername">Twitter Username</label>
   <input type="text" id="twitterUsername" name="twitter" placeholder="Enter your Twitter profile" value="{{ $socelmedia->twitter ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="twitterInput">
   <label for="twitterUsername">Twitter Username</label>
   <input type="text" id="twitterUsername" name="twitter" placeholder="Enter your Twitter profile" value="{{ $socelmedia->twitter ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->instagram > 0)
<div class="" id="instagramInput">
   <label for="instagramUsername">Instagram Username</label>
   <input type="text" id="instagramUsername" name="instagram" placeholder="Enter your Instagram profile" value="{{ $socelmedia->instagram ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="instagramInput">
   <label for="instagramUsername">Instagram Username</label>
   <input type="text" id="instagramUsername" name="instagram" placeholder="Enter your Instagram profile" value="{{ $socelmedia->instagram ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->whatsapp > 0)
<div class="" id="whatsappInput">
   <label for="whatsappUsername">Whatsapp Number</label>
   <input type="text" id="whatsappUsername" name="whatsapp" placeholder="Enter your Whatsapp number" value="{{ $socelmedia->whatsapp ?? '' }}" pattern="[+0-9]+" title="Please enter a valid WhatsApp number (only + and numbers are allowed)" inputmode="tel"/>
</div>
@else
<div class="social-media-input" id="whatsappInput">
   <label for="whatsappUsername">Whatsapp Number</label>
   <input type="text" id="whatsappUsername" name="whatsapp" placeholder="Enter your Whatsapp number" value="{{ $socelmedia->whatsapp ?? '' }}" pattern="[+0-9]+" title="Please enter a valid WhatsApp number (only + and numbers are allowed)" inputmode="tel"/>
</div>
@endif @if ($socelmedia->youtube > 0)
<div class="" id="youtubeInput">
   <label for="youtubeUsername">Youtube Username</label>
   <input type="text" id="youtubeUsername" name="youtube" placeholder="Enter your Youtube profile" value="{{ $socelmedia->youtube ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="youtubeInput">
   <label for="youtubeUsername">Youtube Username</label>
   <input type="text" id="youtubeUsername" name="youtube" placeholder="Enter your Youtube profile" value="{{ $socelmedia->youtube ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->tiktok > 0)
<div class="" id="tiktokInput">
   <label for="tiktokUsername">Tiktok Username</label>
   <input type="text" id="tiktokUsername" name="tiktok" placeholder="Enter your Tiktok profile" value="{{ $socelmedia->tiktok ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="tiktokInput">
   <label for="tiktokUsername">Tiktok Username</label>
   <input type="text" id="tiktokUsername" name="tiktok" placeholder="Enter your Tiktok profile" value="{{ $socelmedia->tiktok ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->linkedin > 0)
<div class="" id="linkedinInput">
   <label for="linkedinUsername">linkedin Username</label>
   <input type="text" id="linkedinUsername" name="linkedin" placeholder="Enter your Linkedin profile" value="{{ $socelmedia->linkedin ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="linkedinInput">
   <label for="linkedinUsername">linkedin Username</label>
   <input type="text" id="linkedinUsername" name="linkedin" placeholder="Enter your Linkedin profile" value="{{ $socelmedia->linkedin ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->snapchat > 0)
<div class="" id="snapchatInput">
   <label for="snapchatUsername">Snapchat Username</label>
   <input type="text" id="snapchatUsername" name="snapchat" placeholder="Enter your Snapchat profile" value="{{ $socelmedia->snapchat ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="snapchatInput">
   <label for="snapchatUsername">Snapchat Username</label>
   <input type="text" id="snapchatUsername" name="snapchat" placeholder="Enter your Snapchat profile" value="{{ $socelmedia->snapchat ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->telegram > 0)
<div class="" id="telegramInput">
   <label for="telegramUsername">Telegram Username</label>
   <input type="text" id="telegramUsername" name="telegram" placeholder="Enter your Telegram profile" value="{{ $socelmedia->telegram ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else 
<div class="social-media-input" id="telegramInput">
   <label for="telegramUsername">Telegram Username</label>
   <input type="text" id="telegramUsername" name="telegram" placeholder="Enter your Telegram profile" value="{{ $socelmedia->telegram ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->discord > 0)
<div class="" id="discordInput">
   <label for="discordUsername">Discord Username</label>
   <input type="text" id="discordUsername" name="discord" placeholder="Enter your Discord profile" value="{{ $socelmedia->discord ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="discordInput">
   <label for="discordUsername">Discord Username</label>
   <input type="text" id="discordUsername" name="discord" placeholder="Enter your Discord profile" value="{{ $socelmedia->discord ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->skype > 0)
<div class="" id="skypeInput">
   <label for="skypeUsername">Skype Username</label>
   <input type="text" id="skypeUsername" name="skype" placeholder="Enter your Skype profile" value="{{ $socelmedia->skype ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="skypeInput">
   <label for="skypeUsername">Skype Username</label>
   <input type="text" id="skypeUsername" name="skype" placeholder="Enter your Skype profile" value="{{ $socelmedia->skype ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->paypal > 0)
<div class="" id="paypalInput">
   <label for="paypalUsername">Paypal Username</label>
   <input type="text" id="paypalUsername" name="paypal" placeholder="Enter your Paypal profile" value="{{ $socelmedia->paypal ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="paypalInput">
   <label for="paypalUsername">Paypal Username</label>
   <input type="text" id="paypalUsername" name="paypal" placeholder="Enter your Paypal profile" value="{{ $socelmedia->paypal ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->spotify > 0)
<div class="" id="spotifyInput">
   <label for="spotifyUsername">Spotify Username</label>
   <input type="text" id="spotifyUsername" name="spotify" placeholder="Enter your Spotify profile" value="{{ $socelmedia->spotify ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="spotifyInput">
   <label for="spotifyUsername">Spotify Username</label>
   <input type="text" id="spotifyUsername" name="spotify" placeholder="Enter your Spotify profile" value="{{ $socelmedia->spotify ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->applemusic > 0)
<div class="" id="applemusicInput">
   <label for="applemusicUsername">Applemusic Username</label>
   <input type="text" id="applemusicUsername" name="applemusic" placeholder="Enter your Applemusic profile" value="{{ $socelmedia->applemusic ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="applemusicInput">
   <label for="applemusicUsername">Applemusic Username</label>
   <input type="text" id="applemusicUsername" name="applemusic" placeholder="Enter your Applemusic profile" value="{{ $socelmedia->applemusic ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->soundcloud > 0)
<div class="" id="soundcloudInput">
   <label for="soundcloudUsername">Soundcloud Username</label>
   <input type="text" id="soundcloudUsername" name="soundcloud" placeholder="Enter your Soundcloud profile" value="{{ $socelmedia->soundcloud ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else

<div class="social-media-input" id="soundcloudInput">
   <label for="soundcloudUsername">Soundcloud Username</label>
   <input type="text" id="soundcloudUsername" name="soundcloud" placeholder="Enter your Soundcloud profile" value="{{ $socelmedia->soundcloud ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->behance > 0)
<div class="" id="behanceInput">
   <label for="behanceUsername">Behance Username</label>
   <input type="text" id="behanceUsername" name="behance" placeholder="Enter your Behance profile" value="{{ $socelmedia->behance ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="behanceInput">
   <label for="behanceUsername">Behance Username</label>
   <input type="text" id="behanceUsername" name="behance" placeholder="Enter your Behance profile" value="{{ $socelmedia->behance ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->twitch > 0)
<div class="" id="twitchInput">
   <label for="twitchUsername">Twitch Username</label>
   <input type="text" id="twitchUsername" name="twitch" placeholder="Enter your Twitch profile" value="{{ $socelmedia->twitch ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@else
<div class="social-media-input" id="twitchInput">
   <label for="twitchUsername">Twitch Username</label>
   <input type="text" id="twitchUsername" name="twitch" placeholder="Enter your Twitch profile" value="{{ $socelmedia->twitch ?? '' }}" pattern="[a-zA-Z0-9_]+"/>
</div>
@endif @if ($socelmedia->link > 0)
<div class="" id="linkInput">
   <label for="linkUsername">Link</label>
   <input type="text" id="linkUsername" name="link" placeholder="Enter your Link" value="{{ $socelmedia->link ?? '' }}" />
</div>
@else
<div class="social-media-input" id="linkInput">
   <label for="linkUsername">Link</label>
   <input type="text" id="linkUsername" name="link" placeholder="Enter your Link" value="{{ $socelmedia->link ?? '' }}" />
</div>
@endif @if ($socelmedia->website > 0)
<div class="" id="websiteInput">
   <label for="websiteUsername">Website Link</label>
   <input type="text" id="twitchUsername" name="website" placeholder="Enter your Website" value="{{ $socelmedia->website ?? '' }}" />
</div>
@else
<div class="social-media-input" id="websiteInput">
   <label for="websiteUsername">Website Link</label>
   <input type="text" id="twitchUsername" name="website" placeholder="Enter your Website" value="{{ $socelmedia->website ?? '' }}" />
</div>
@endif

@if ($socelmedia->address > 0)
{{-- Start Addres --}}
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://api.opencagedata.com/geocode/v1/js?key=1de4ecc69ce340e4ba918ae16bffed6a"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<div class="" id="addressInput">
   <label for="addressInput">Address</label>
   <input type="text" id="addressInput" name="address" placeholder="Enter your Address" value="{{ $socelmedia->address ?? '' }}" onclick="initMap()" />
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
@else
{{-- Start Addres --}}
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://api.opencagedata.com/geocode/v1/js?key=1de4ecc69ce340e4ba918ae16bffed6a"></script>
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<div class="social-media-input" id="addressInput">
   <label for="addressInput">Address</label>
   <input type="text" id="addressInput" name="address" placeholder="Enter your Address" value="{{ $socelmedia->address ?? '' }}" onclick="initMap()" />
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
@endif





@if ($socelmedia->doc > 0)
<div class="" id="pdfInput">
    <label for="pdffile">PDF File</label>
    <input type="file" id="pdffile" name="doc" accept=".pdf" value="{{$socelmedia->doc}}"/>
    <a href="#" class="delete-link" onclick="deleteFile({{$socelmedia->id}})">
        <i class="fa fa-trash delete-icon" aria-hidden="true"></i>
    </a>
</div>
@else
<div class="social-media-input" id="pdfInput">
    <label for="pdfFile">PDF File</label>
    <input type="file" id="pdffile" name="doc" accept=".pdf"  value="{{$socelmedia->doc}}"/>
</div>
@endif

<script> 
    function deleteFile(fileId) {
        // Construct the URL using the provided fileId
        var deleteUrl = "{{ route('delete_file', ['id' => ':fileId']) }}".replace(':fileId', fileId);

        // Navigate to the URL
        window.location.href = deleteUrl;
    }
</script>
<script>
    function deleteprofile(fileId) {
        // Construct the URL using the provided fileId
        var deleteUrl = "{{ route('delete_profile', ['id' => ':fileId']) }}".replace(':fileId', fileId);

        // Navigate to the URL
        window.location.href = deleteUrl;
    }
</script>
<script>
    function deleteprologo(fileId) {
        // Construct the URL using the provided fileId
        var deleteUrl = "{{ route('delete_logo', ['id' => ':fileId']) }}".replace(':fileId', fileId);

        // Navigate to the URL
        window.location.href = deleteUrl;
    }
</script>

