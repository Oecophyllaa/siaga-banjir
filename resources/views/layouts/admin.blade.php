<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Siaga Banjir</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Styles -->
  @stack('before-style')
  @include('admin.partials.style')
  @stack('after-style')
</head>

<body>
  <!-- Left Panel -->
  @include('admin.partials.sidebar')
  <!-- /#left-panel -->

  <!-- Right Panel -->
  <div id="right-panel" class="right-panel">
    <!-- Header-->
    @include('admin.partials.navbar')
    <!-- /#header -->
    <!-- Content -->
    @yield('content')
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    @include('admin.partials.footer')
    <!-- /.site-footer -->
  </div>
  <!-- /#right-panel -->

  <!-- Scripts -->
  @stack('before-script')
  @include('admin.partials.script')
  @stack('after-script')
</body>

</html>
