<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Aplikasi Perpustakaan'  }}</title>

  @yield('baseStyles')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    @yield('body')

</div>
    @yield('baseScripts')
    @include('sweetalert::alert')

</body>
</html>
