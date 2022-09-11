@extends('layouts.main')

@section('container')

<div class="row d-flex align-items-center mb-5">
  <div class="col-lg-6 d-flex justify-content-center my-5">
    <img class="mw-250 rounded shadow-lg" src="{{ asset('img/dean.jpg') }}" alt="Fikri Dean Radityo">
  </div>

  <div class="col-lg-6 d-flex justify-content-center align-items-center position-relative my-5">
    <div class="aboutChangingOne d-flex flex-column position-absolute">
      <h1 class="poppins text-uppercase fs-5 text-muted text-center">Hello! I'm</h1>
      <h1 class="poppins text-uppercase fs-1 fw-bold text-center">Fikri Dean Radityo</h1>

    </div>

    <div class="aboutChangingTwo d-flex flex-column position-absolute">
      <h1 class="poppins text-uppercase fs-5 text-muted text-center">I'm From</h1>
      <h1 class="poppins text-uppercase fs-1 fw-bold text-center">Indonesia</h1>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-lg-12">
    <h1 class="poppins fs-5 text-muted text-center">
      Technology Stack
    </h1>
  </div>
</div>

<div class="row my-4">
  <div class="col-lg-12 d-flex flex-row justify-content-around align-items-center">
    <i class="fa-brands fa-html5 fs-1"></i>

    <i class="fa-brands fa-css3-alt fs-1"></i>
  
    <i class="fa-brands fa-square-js fs-1"></i>
  
    <i class="fa-brands fa-sass fs-1"></i>
  </div>
  
  
</div>

<div class="row py-5">
  <div class="col-lg-12 d-flex flex-row justify-content-around align-items-center">
    <i class="fa-brands fa-react fs-1"></i>
  
    <i class="fa-brands fa-php fs-1"></i>
  
    <i class="fab fa-laravel fs-1"></i>
  
    <i class="fa-brands fa-node fs-1"></i>
  
  </div>
</div>

@endsection