<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('helpers.robots')
  @include('helpers.gtm-head')
  @include('helpers.google-analytics')
  @include('helpers.favicons')
  @include('helpers.hotjar')
  @include('helpers.facebook-pixel')

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400;1,700&family=Work+Sans:ital,wght@0,400;0,500;0,700;1,400;1,700&display=swap">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

  @wp_head
  @stack('head_scripts')
</head>

<body {{ body_class('body') }}>
  @include('helpers.gtm-body')

  @stack('modals')

  <div class="site wrapper" id="app">
    <div class="site__header">
      @include('components.header')
    </div>

    <div class="site__content">
      @yield('content')
    </div>

    <div class="site__footer">
      @include('components.footer')
    </div>
  </div>

  @wp_footer

  {{-- @include('helpers.google-maps-script') --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="{{mix('/js/manifest.js')}}"></script>
  <script src="{{mix('/js/vendor.js')}}"></script>
  <script src="{{mix('/js/app.js')}}"></script>
  @stack('footer_scripts')
</body>
</html>
