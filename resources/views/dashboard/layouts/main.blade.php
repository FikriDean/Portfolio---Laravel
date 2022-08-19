<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | {{ $title }}</title>

  {{-- Bootstrap css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  {{-- Bootstrap Icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

  {{-- font_awesome --}}
  <link rel="stylesheet" href="{{ asset('fontAwesome/css/all.css') }}">
  <script src="{{ asset('fontAwesome/js/all.js') }}"></script>

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  {{-- Owned css --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  {{-- Trix --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
  <script type="text/javascript" src="{{ asset('/js/trix.js') }}"></script>

  <style>
    .trix-button-group.trix-button-group--file-tools {
      display:none;
    }
  </style>

  {{-- dark mode --}}
  <link rel="stylesheet" href="{{ asset('css/dark-mode.css') }}">

</head>
<body>

  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
      </main>
    </div>
  </div>
  
  {{-- Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>

  {{-- AOS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  {{-- Owned --}}
  <script src="{{ asset('js/script.js') }}"></script>

  {{-- dark-mode --}}
  <script src="{{ asset('js/dark-mode-switch.min.js') }}"></script>
</body>
</html>