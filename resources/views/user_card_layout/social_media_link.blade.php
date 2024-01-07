<ul class="profile-list">
    @if ($cardform->email)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-envelope ic"></i></span>
          <a href="mailto:{{ $cardform->email }}"><span class="content">{{ $cardform->email ?? ''}}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->phone)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-phone ic"></i></span>
          <a href="tel:{{ $cardform->phone }}"><span class="content">{{ $cardform->phone ?? ''}}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->facebook)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-facebook ic"></i></span>
          <a href="{{ $cardform->socelmedia->facebook }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->facebookprofilename, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->facebook2)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-facebook ic"></i></span>
          <a href="{{ $cardform->socelmedia->facebook2 }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->facebookprofilename2, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->facebook3)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-facebook ic"></i></span>
          <a href="{{ $cardform->socelmedia->facebook3 }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->facebookprofilename3, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->website)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-globe ic"></i></span>
          <a href="{{ $cardform->socelmedia->website }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->website, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->skype)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-skype ic" aria-hidden="true"></i></span>
          <a href="skype:{{ $cardform->socelmedia->skype }}?chat" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->skype, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->pinterest)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-pinterest ic"></i></span>
          <a href="https://www.pinterest.com/{{ $cardform->socelmedia->pinterest }}" target="_blank" ><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->pinterest, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->twitter)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-twitter ic"></i></span>
          <a href="https://twitter.com/{{ $cardform->socelmedia->twitter }}" target="_blank" ><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->twitter, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->instagram)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-instagram ic"></i></span>
          <a href="https://www.instagram.com/{{ $cardform->socelmedia->instagram }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->instagram, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->instagram2)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-instagram ic"></i></span>
          <a href="https://www.instagram.com/{{ $cardform->socelmedia->instagram2 }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->instagram2, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->instagram3)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-instagram ic"></i></span>
          <a href="https://www.instagram.com/{{ $cardform->socelmedia->instagram3 }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->instagram3, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->whatsapp)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-whatsapp ic"></i></span>
          <a href="https://api.whatsapp.com/send?phone={{ $cardform->socelmedia->whatsapp }}" target="_blank" ><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->whatsapp, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->youtube)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-youtube ic"></i></span>
          <a href="https://www.youtube.com/{{ $cardform->socelmedia->youtube }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->youtube, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->tiktok)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-tiktok ic"></i></span>
          <a href="https://www.tiktok.com/@{{ $cardform->socelmedia->tiktok }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->tiktok, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->linkedin)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-linkedin ic"></i></span>
          <a href="https://www.linkedin.com/in/{{ $cardform->socelmedia->linkedin }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->linkedin, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->snapchat)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-snapchat ic"></i></span>
          <a href="https://www.snapchat.com/add/{{ $cardform->socelmedia->snapchat }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->snapchat, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->telegram)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-telegram ic"></i></span>
          <a href="https://t.me/{{ $cardform->socelmedia->telegram }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->telegram, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->discord)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-discord ic"></i></span>
          <a href="https://discord.gg/{{ $cardform->socelmedia->discord }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->discord, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->skype)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-skype ic"></i></span>
          <a href="https://web.skype.com/{{ $cardform->socelmedia->skype }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->skype, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->paypal)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-paypal ic"></i></span>
          <a href="https://www.paypal.me/{{ $cardform->socelmedia->paypal }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->paypal, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->spotify)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-spotify ic"></i></span>
          <a href="https://open.spotify.com/user/{{ $cardform->socelmedia->spotify }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->spotify, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->applemusic)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-apple ic"></i></span>
          <a href="https://music.apple.com/us/artist/{{ $cardform->socelmedia->applemusic }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->applemusic, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->soundcloud)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-soundcloud ic"></i></span>
          <a href="https://soundcloud.com/{{ $cardform->socelmedia->soundcloud }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->soundcloud, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->behance)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-behance ic"></i></span>
          <a href="https://www.behance.net/{{ $cardform->socelmedia->behance }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->behance, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->twitch)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-twitch ic"></i></span>
          <a href="https://www.twitch.tv/{{ $cardform->socelmedia->twitch }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->twitch, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->link)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-link ic"></i></span>
          <a href="{{ $cardform->socelmedia->link }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->link, $limit = 30, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->address)
    <div class="your-div-class">
       <li class="clearfix">
         <span class="title"><i class="fa fa-map-marker ic"></i></span>
         <span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->address, $limit = 30, $end = '...') }}</span>
         <!-- Add a link to show the address on a map -->
         <a href="https://maps.google.com/?q={{ urlencode($cardform->socelmedia->address) }}" target="_blank">Show on Map</a>
       </li>
    </div>
   @endif
   @if ($cardform->socelmedia->doc)
   <div class="your-div-class">
      <li class="clearfix">
         <span class="title"><i class="fa fa-file-pdf-o ic"></i></span>
         <a href="{{ asset('pdf/' . $cardform->socelmedia->doc) }}" target="_blank">Show PDF</a>
      </li>
   </div>
   @endif
   <div>
    @include('user_card_layout.footer')
   </div>

 </ul>
