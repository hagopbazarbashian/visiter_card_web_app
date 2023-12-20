
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('seo_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Hostco - Modern Web Hosting & WHMCS Template" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    @include('layout.style')

  </head>
<body class=" ">
    <main class="main-content">

       <span class="screen-darken"></span>
         <!-- loader Start -->
          {{-- <div class="loader simple-loader">
            <div class="loader-body">
                <img src="{{asset('assets/images/loader.gif')}}" alt="loader" class="img-fluid " width="300">
              </div>
          </div> --}}
        <!-- loader END -->  <!-- loader END -->
        @yield('login_system')

    </main>

     @include('layout.rt_box')

     
    {{-- JS Script --}}
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
