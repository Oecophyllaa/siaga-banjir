<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Oecophyllaa" />
  <title>Siaga Banjir</title>

  <!-- Styles -->
  @stack('before-style')
  @include('front.partials.style')
  @stack('after-style')
</head>

<body id="page-top" onload="display_ct()">
  @include('front.partials.navbar')

  @yield('content')

  @include('front.partials.footer')

  <!-- Scripts -->
  @stack('before-script')
  @include('front.partials.script')
  @stack('after-script')
</body>

</html>
