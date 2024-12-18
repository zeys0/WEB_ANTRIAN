<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body class="bg-slate-200">
  @include('partials.navbarRegis')
  @yield('content')

  @include('partials.footer')

  <script src=" {{asset('js/script.js')}}">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>