<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEAN | {{ $title }}</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- dark mode --}}
    <link rel="stylesheet" href="{{ asset('css/dark-mode.css') }}">
    
    {{-- font_awesome --}}
    <link rel="stylesheet" href="{{ asset('fontAwesome/css/all.css') }}">
    <script src="{{ asset('fontAwesome/js/all.js') }}"></script>

    {{-- Owned --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  </head>
  <body class="bg-light">
   
    <div class="container">
      @yield("container")
    </div>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    {{-- dark-mode --}}
    <script src="{{ asset('js/dark-mode-switch.min.js') }}"></script>

    {{-- Owned --}}
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>