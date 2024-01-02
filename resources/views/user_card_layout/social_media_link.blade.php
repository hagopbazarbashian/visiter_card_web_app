<ul class="profile-list">
    @if ($cardform->email)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-envelope ic"></i></span>
          <a href="mailto:{{ $cardform->email }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->email, $limit = 20, $end = '...') }}</span></a>
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
    @if ($cardform->socelmedia->website)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="material-icons ic"></i></span>
          <a href="{{ $cardform->socelmedia->website }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->website, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->skype)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-skype ic" aria-hidden="true"></i></span>
          <a href="{{ $cardform->socelmedia->skype }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->skype, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->facebook)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-facebook ic"></i></span>
          <a href="{{ $cardform->socelmedia->facebook }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->facebook, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->pinterest)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-pinterest ic"></i></span>
          <a href="{{ $cardform->socelmedia->pinterest }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->pinterest, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->twitter)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-twitter ic"></i></span>
          <a href="{{ $cardform->socelmedia->twitter }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->twitter, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->instagram)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-instagram ic"></i></span>
          <a href="{{ $cardform->socelmedia->instagram }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->instagram, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->whatsapp)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-whatsapp ic"></i></span>
          <a href="https://api.whatsapp.com/send?phone={{ $cardform->socelmedia->whatsapp }}"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->whatsapp, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif @if ($cardform->socelmedia->youtube)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-youtube ic"></i></span>
          <a href="{{ $cardform->socelmedia->youtube }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->youtube, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->tiktok)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-tiktok ic"></i></span>
          <a href="{{ $cardform->socelmedia->tiktok }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->tiktok, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->linkedin)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-linkedin ic"></i></span>
          <a href="{{ $cardform->socelmedia->linkedin }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->linkedin, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->snapchat)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-snapchat ic"></i></span>
          <a href="{{ $cardform->socelmedia->snapchat }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->snapchat, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->telegram)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-telegram ic"></i></span>
          <a href="https://t.me/{{ $cardform->socelmedia->telegram }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->telegram, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->discord)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-discord ic"></i></span>
          <a href="https://discord.gg/{{ $cardform->socelmedia->discord }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->discord, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->skype)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-skype ic"></i></span>
          <a href="https://web.skype.com/{{ $cardform->socelmedia->skype }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->skype, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->paypal)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-paypal ic"></i></span>
          <a href="https://www.paypal.me/{{ $cardform->socelmedia->paypal }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->paypal, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->spotify)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-spotify ic"></i></span>
          <a href="https://open.spotify.com/user/{{ $cardform->socelmedia->spotify }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->spotify, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->applemusic)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-apple ic"></i></span>
          <a href="https://music.apple.com/us/artist/{{ $cardform->socelmedia->applemusic }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->applemusic, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->soundcloud)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-soundcloud ic"></i></span>
          <a href="https://soundcloud.com/{{ $cardform->socelmedia->soundcloud }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->soundcloud, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->behance)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-behance ic"></i></span>
          <a href="https://www.behance.net/{{ $cardform->socelmedia->behance }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->behance, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->twitch)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-twitch ic"></i></span>
          <a href="https://www.twitch.tv/{{ $cardform->socelmedia->twitch }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->twitch, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
    @if ($cardform->socelmedia->link)
    <div class="your-div-class">
       <li class="clearfix">
          <span class="title"><i class="fa fa-link ic"></i></span>
          <a href="{{ $cardform->socelmedia->link }}" target="_blank"><span class="content">{{ \Illuminate\Support\Str::limit($cardform->socelmedia->link, $limit = 20, $end = '...') }}</span></a>
       </li>
    </div>
    @endif
 </ul>
