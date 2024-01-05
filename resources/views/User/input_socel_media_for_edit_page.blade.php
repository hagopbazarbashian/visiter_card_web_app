
<!-- Your existing form fields go here -->
@if ($socelmedia->facebook > 0)
<div class="" id="facebookInput">
   <label for="facebookUsername">Facebook Username</label>
   <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook profile link" value="{{ $socelmedia->facebook ?? '' }}" />
</div>
@else
<div class="social-media-input" id="facebookInput">
   <label for="facebookUsername">Facebook Username</label>
   <input type="text" id="facebookUsername" name="facebook" placeholder="Enter your Facebook profile link" value="{{ $socelmedia->facebook ?? '' }}" />
</div>
@endif @if ($socelmedia->pinterest > 0)
<div class="" id="pinterestInput">
   <label for="pinterestUsername">Pinterest Username</label>
   <input type="text" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest profile link" value="{{ $socelmedia->pinterest ?? '' }}" />
</div>
@else
<div class="social-media-input" id="pinterestInput">
   <label for="pinterestUsername">Pinterest Username</label>
   <input type="text" id="pinterestUsername" name="pinterest" placeholder="Enter your Pinterest profile link" value="{{ $socelmedia->pinterest ?? '' }}" />
</div>
@endif @if ($socelmedia->twitter > 0)
<div class="" id="twitterInput">
   <label for="twitterUsername">twitter Username</label>
   <input type="text" id="twitterUsername" name="twitter" placeholder="Enter your twitter profile link" value="{{ $socelmedia->twitter ?? '' }}" />
</div>
@else
<div class="social-media-input" id="twitterInput">
   <label for="twitterUsername">twitter Username</label>
   <input type="text" id="twitterUsername" name="twitter" placeholder="Enter your twitter profile link" value="{{ $socelmedia->twitter ?? '' }}" />
</div>
@endif @if ($socelmedia->instagram > 0)
<div class="" id="instagramInput">
   <label for="instagramUsername">instagram Username</label>
   <input type="text" id="instagramUsername" name="instagram" placeholder="Enter your instagram profile link" value="{{ $socelmedia->instagram ?? '' }}" />
</div>
@else
<div class="social-media-input" id="instagramInput">
   <label for="instagramUsername">instagram Username</label>
   <input type="text" id="instagramUsername" name="instagram" placeholder="Enter your instagram profile link" value="{{ $socelmedia->instagram ?? '' }}" />
</div>
@endif @if ($socelmedia->whatsapp > 0)
<div class="" id="whatsappInput">
   <label for="whatsappUsername">instagram Username</label>
   <input type="text" id="whatsappUsername" name="whatsapp" placeholder="Enter your whatsapp number" value="{{ $socelmedia->whatsapp ?? '' }}" />
</div>
@else
<div class="social-media-input" id="whatsappInput">
   <label for="whatsappUsername">instagram Username</label>
   <input type="text" id="whatsappUsername" name="whatsapp" placeholder="Enter your whatsapp number" value="{{ $socelmedia->whatsapp ?? '' }}" />
</div>
@endif @if ($socelmedia->youtube > 0)
<div class="" id="youtubeInput">
   <label for="youtubeUsername">youtube Username</label>
   <input type="text" id="youtubeUsername" name="youtube" placeholder="Enter your youtube profile link" value="{{ $socelmedia->youtube ?? '' }}" />
</div>
@else
<div class="social-media-input" id="youtubeInput">
   <label for="youtubeUsername">youtube Username</label>
   <input type="text" id="youtubeUsername" name="youtube" placeholder="Enter your youtube profile link" value="{{ $socelmedia->youtube ?? '' }}" />
</div>
@endif @if ($socelmedia->tiktok > 0)
<div class="" id="tiktokInput">
   <label for="tiktokUsername">tiktok Username</label>
   <input type="text" id="tiktokUsername" name="tiktok" placeholder="Enter your tiktok profile link" value="{{ $socelmedia->tiktok ?? '' }}" />
</div>
@else
<div class="social-media-input" id="tiktokInput">
   <label for="tiktokUsername">tiktok Username</label>
   <input type="text" id="tiktokUsername" name="tiktok" placeholder="Enter your tiktok profile link" value="{{ $socelmedia->tiktok ?? '' }}" />
</div>
@endif @if ($socelmedia->linkedin > 0)
<div class="" id="linkedinInput">
   <label for="linkedinUsername">linkedin Username</label>
   <input type="text" id="linkedinUsername" name="linkedin" placeholder="Enter your linkedin profile link" value="{{ $socelmedia->linkedin ?? '' }}" />
</div>
@else
<div class="social-media-input" id="linkedinInput">
   <label for="linkedinUsername">linkedin Username</label>
   <input type="text" id="linkedinUsername" name="linkedin" placeholder="Enter your linkedin profile link" value="{{ $socelmedia->linkedin ?? '' }}" />
</div>
@endif @if ($socelmedia->snapchat > 0)
<div class="" id="snapchatInput">
   <label for="snapchatUsername">snapchat Username</label>
   <input type="text" id="snapchatUsername" name="snapchat" placeholder="Enter your snapchat profile link" value="{{ $socelmedia->snapchat ?? '' }}" />
</div>
@else
<div class="social-media-input" id="snapchatInput">
   <label for="snapchatUsername">snapchat Username</label>
   <input type="text" id="snapchatUsername" name="snapchat" placeholder="Enter your snapchat profile link" value="{{ $socelmedia->snapchat ?? '' }}" />
</div>
@endif @if ($socelmedia->telegram > 0)
<div class="" id="telegramInput">
   <label for="telegramUsername">telegram Username</label>
   <input type="text" id="telegramUsername" name="telegram" placeholder="Enter your telegram profile name" value="{{ $socelmedia->telegram ?? '' }}" />
</div>
@else 
<div class="social-media-input" id="telegramInput">
   <label for="telegramUsername">telegram Username</label>
   <input type="text" id="telegramUsername" name="telegram" placeholder="Enter your telegram profile name" value="{{ $socelmedia->telegram ?? '' }}" />
</div>
@endif @if ($socelmedia->discord > 0)
<div class="" id="discordInput">
   <label for="discordUsername">discord Username</label>
   <input type="text" id="discordUsername" name="discord" placeholder="Enter your discord profile name" value="{{ $socelmedia->discord ?? '' }}" />
</div>
@else
<div class="social-media-input" id="discordInput">
   <label for="discordUsername">discord Username</label>
   <input type="text" id="discordUsername" name="discord" placeholder="Enter your discord profile name" value="{{ $socelmedia->discord ?? '' }}" />
</div>
@endif @if ($socelmedia->skype > 0)
<div class="" id="skypeInput">
   <label for="skypeUsername">skype Username</label>
   <input type="text" id="skypeUsername" name="skype" placeholder="Enter your skype profile name" value="{{ $socelmedia->skype ?? '' }}" />
</div>
@else
<div class="social-media-input" id="skypeInput">
   <label for="skypeUsername">skype Username</label>
   <input type="text" id="skypeUsername" name="skype" placeholder="Enter your skype profile name" value="{{ $socelmedia->skype ?? '' }}" />
</div>
@endif @if ($socelmedia->paypal > 0)
<div class="" id="paypalInput">
   <label for="paypalUsername">paypal Username</label>
   <input type="text" id="paypalUsername" name="paypal" placeholder="Enter your paypal profile name" value="{{ $socelmedia->paypal ?? '' }}" />
</div>
@else
<div class="social-media-input" id="paypalInput">
   <label for="paypalUsername">paypal Username</label>
   <input type="text" id="paypalUsername" name="paypal" placeholder="Enter your paypal profile name" value="{{ $socelmedia->paypal ?? '' }}" />
</div>
@endif @if ($socelmedia->spotify > 0)
<div class="" id="spotifyInput">
   <label for="spotifyUsername">spotify Username</label>
   <input type="text" id="spotifyUsername" name="spotify" placeholder="Enter your spotify profile name" value="{{ $socelmedia->spotify ?? '' }}" />
</div>
@else
<div class="social-media-input" id="spotifyInput">
   <label for="spotifyUsername">spotify Username</label>
   <input type="text" id="spotifyUsername" name="spotify" placeholder="Enter your spotify profile name" value="{{ $socelmedia->spotify ?? '' }}" />
</div>
@endif @if ($socelmedia->applemusic > 0)
<div class="" id="applemusicInput">
   <label for="applemusicUsername">applemusic Username</label>
   <input type="text" id="applemusicUsername" name="applemusic" placeholder="Enter your applemusic profile name" value="{{ $socelmedia->applemusic ?? '' }}" />
</div>
@else
<div class="social-media-input" id="applemusicInput">
   <label for="applemusicUsername">applemusic Username</label>
   <input type="text" id="applemusicUsername" name="applemusic" placeholder="Enter your applemusic profile name" value="{{ $socelmedia->applemusic ?? '' }}" />
</div>
@endif @if ($socelmedia->soundcloud > 0)
<div class="" id="soundcloudInput">
   <label for="soundcloudUsername">soundcloud Username</label>
   <input type="text" id="soundcloudUsername" name="soundcloud" placeholder="Enter your soundcloud profile name" value="{{ $socelmedia->soundcloud ?? '' }}" />
</div>
@else

<div class="social-media-input" id="soundcloudInput">
   <label for="soundcloudUsername">soundcloud Username</label>
   <input type="text" id="soundcloudUsername" name="soundcloud" placeholder="Enter your soundcloud profile name" value="{{ $socelmedia->soundcloud ?? '' }}" />
</div>
@endif @if ($socelmedia->behance > 0)
<div class="" id="behanceInput">
   <label for="behanceUsername">behance Username</label>
   <input type="text" id="behanceUsername" name="behance" placeholder="Enter your behance profile name" value="{{ $socelmedia->behance ?? '' }}" />
</div>
@else
<div class="social-media-input" id="behanceInput">
   <label for="behanceUsername">behance Username</label>
   <input type="text" id="behanceUsername" name="behance" placeholder="Enter your behance profile name" value="{{ $socelmedia->behance ?? '' }}" />
</div>
@endif @if ($socelmedia->twitch > 0)
<div class="" id="twitchInput">
   <label for="twitchUsername">twitch Username</label>
   <input type="text" id="twitchUsername" name="twitch" placeholder="Enter your twitch profile name" value="{{ $socelmedia->twitch ?? '' }}" />
</div>
@else
<div class="social-media-input" id="twitchInput">
   <label for="twitchUsername">twitch Username</label>
   <input type="text" id="twitchUsername" name="twitch" placeholder="Enter your twitch profile name" value="{{ $socelmedia->twitch ?? '' }}" />
</div>
@endif @if ($socelmedia->link > 0)
<div class="" id="linkInput">
   <label for="linkUsername">link Username</label>
   <input type="text" id="linkUsername" name="link" placeholder="Enter your link" value="{{ $socelmedia->link ?? '' }}" />
</div>
@else
<div class="social-media-input" id="linkInput">
   <label for="linkUsername">link Username</label>
   <input type="text" id="linkUsername" name="link" placeholder="Enter your link" value="{{ $socelmedia->link ?? '' }}" />
</div>
@endif @if ($socelmedia->website > 0)
<div class="" id="websiteInput">
   <label for="websiteUsername">Website Link</label>
   <input type="text" id="twitchUsername" name="website" placeholder="Enter your website" value="{{ $socelmedia->website ?? '' }}" />
</div>
@else
<div class="social-media-input" id="websiteInput">
   <label for="websiteUsername">Website Link</label>
   <input type="text" id="twitchUsername" name="website" placeholder="Enter your website" value="{{ $socelmedia->website ?? '' }}" />
</div>
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

