<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Document Title  -->
    <title>Store</title>
    <!--  Favicons  -->
    <link rel="apple-touch-icon" sizes="180x180" href="#">
    <link rel="icon" type="image/png" sizes="32x32" href="#">
    <link rel="icon" type="image/png" sizes="16x16" href="#">
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <link rel="manifest" href="#">
    <meta name="msapplication-TileImage" content="#">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('platform/js/config.js') }}"></script>
    <script src="{{ asset('platform/libs/simplebar/simplebar.min.js') }}"></script>
    <!--  Stylesheets  -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('platform/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('platform/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('platform/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

  </head>

  <body>
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <!--  Sidebar partial  -->
        @include('platform.manager.partials.sidebar')

        <div class="content">
            <!--  Navbar partial  -->
            @include('platform.manager.partials.navbar.navbar')

            <!--  Main content section  -->
            @yield('main-content')

            <!--  Footer partial  -->
            @include('platform.manager.partials.footer')
        </div>

        <!--  Modal Fade partial  -->
        @include('platform.manager.partials.modal-fade')
      </div>
    </main>

    <!--  Customize partial  -->
    @include('platform.manager.partials.customize')

    <!-- JavaScripts -->
    <script src="{{ asset('platform/libs/popper/popper.min.js') }}"></script>
    <script src="{{ asset('platform/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('platform/libs/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('platform/libs/is/is.min.js') }}"></script>
    <script src="{{ asset('platform/libs/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('platform/libs/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('platform/libs/lodash/lodash.min.js') }}"></script>
    {{-- <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script> --}}
    <script src="{{ asset('platform/libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('platform/js/theme.js') }}"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </body>

</html>
