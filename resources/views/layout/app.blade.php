<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  @include('layout.style')

</head>

<body class="  ">
  {{-- <span class="screen-darken"></span>
  <!-- loader Start -->
   <!-- loader Start -->
  <div class="loader simple-loader">
     <div class="loader-body">
        <img src="{{asset('assets/images/logo.png')}}" alt="loader" class="img-fluid " width="300">
      </div>
  </div> --}}
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content">
      <!--Nav Start-->
      <header class="header-center-home header-merchandise">
          @include('layout.nav-bar')
      </header>
      @yield('home')
  </main>


  @include('layout.footer')

  @include('layout.rt_box')
  @include('layout.script_bottom')

  @if ($errors->any())
  @foreach ($errors->all() as $error)
  <script>
      iziToast.error({
      title: '',
      position: 'topRight',
      message: '<span style="color: red;">{{ $error }}</span>',
  });
  </script>
  @endforeach

  @endif

  @if (session()->get('error'))
  <script>
      iziToast.error({
      title: '',
      position: 'topRight',
      message: '<span  style="color:red; class="error-text">{{ session()->get('error') }}</span>',
  });
  </script>
  @endif

  @if (session()->get('succes'))
  <script>
      iziToast.success({
      title: '',
      position: 'topRight',
      message: '<span style="color: green; class="success-text">{{ session()->get('succes') }}</span>',
  });
  </script>
  @endif
</body>

</html>
