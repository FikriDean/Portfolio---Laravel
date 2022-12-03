@extends('layouts.main')

@section('container')

  <div class="row">

    <div class="col-lg-4 d-flex align-items-center justify-content-center px-5 my-5">
      <img src="{{ asset('img/dean-3.jpg') }}" alt="FIKRI DEAN RADITYO" class="square-middle rounded-circle shadow-lg" data-aos="zoom-in" data-aos-delay="1000">
    </div>

    <div class="col-lg-4 d-flex justify-content-center align-items-center position-relative my-5 px-5 my-5"  data-aos="zoom-in" data-aos-delay="1100">
      <div class="aboutChangingOne d-flex flex-column position-absolute">
        <h1 class="poppins text-uppercase fs-5 text-muted text-center">Hello! I'm</h1>
        <h1 class="poppins text-uppercase fs-1 fw-bold text-center text-dark">Fikri Dean Radityo</h1>
  
      </div>
  
      <div class="aboutChangingTwo d-flex flex-column position-absolute">
        <h1 class="poppins text-uppercase fs-5 text-muted text-center">I'm From</h1>
        <h1 class="poppins text-uppercase fs-1 fw-bold text-center text-dark">Indonesia</h1>
      </div>
    </div>

    <div class="col-lg-4 d-flex justify-content-center align-items-center px-5 my-5">
      <div class="row display-3 text-primary d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="1200">
        <a href="https://www.linkedin.com/in/fikri-dean-radityo-23bb3621a/" class="btn fs-1 col-lg-6 p-5 border-end border-bottom rounded-0 translate-topleft border-2 text-dark" target="_blank">
          <i class="bi bi-linkedin text-primary" data-aos="zoom-out" data-aos-delay="1300"></i>
        </a>
        
        <a href="https://github.com/FikriDean?tab=repositories" class="btn fs-1 col-lg-6 p-5 border-start border-bottom rounded-0 translate-topright border-2 text-dark" target="_blank">
          <i class="bi bi-github" data-aos="zoom-out" data-aos-delay="1400"></i>
        </a>
        
        <a href="https://www.freecodecamp.org/fikridean" class="btn fs-1 col-lg-6 p-5 border-top border-end rounded-0 translate-bottomleft border-2 text-dark" target="_blank">
          <i class="bi bi-layers-fill" data-aos="zoom-out" data-aos-delay="1500"></i>
        </a>

        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxjNTrmfdDXPfKPVVCVpCphJQMhgpjVsvRVsmKWKbFsXHXTRkCQnQtXDxHBKzQQSmXBgbf" class="btn fs-1 col-lg-6 p-5 border-top border-start rounded-0 translate-bottomright border-2 text-dark" target="_blank">
          <i class="bi bi-envelope-fill text-danger" data-aos="zoom-out" data-aos-delay="1600"></i>  
        </a>
      </div>
    </div>
    
  </div>
  
  <div class="row">
    <div class="col-lg-12 mt-5">
      <h1 class="poppins fs-5 text-muted text-center" data-aos="zoom-out" data-aos-delay="1700">
        Technology Stack
      </h1>
    </div>
  </div>
  
  <div class="row py-5">
    <div class="col-lg-12 d-flex flex-row justify-content-around align-items-center" data-aos="zoom-in" data-aos-delay="1800">
      <i class="fa-brands fa-html5 fs-1 text-orange"></i>
  
      <i class="fa-brands fa-css3-alt fs-1 text-primary"></i>
    
      <i class="fa-brands fa-square-js fs-1 text-warning"></i>
    
      <i class="fa-brands fa-sass fs-1 text-danger"></i>
    </div>
    
  </div>
  
  <div class="row py-5 mb-5">
    <div class="col-lg-12 d-flex flex-row justify-content-around align-items-center" data-aos="zoom-out" data-aos-delay="1900">
      <i class="fa-brands fa-react fs-1 text-info"></i>
    
      <i class="fa-brands fa-php fs-1 text-purple"></i>
    
      <i class="fab fa-laravel fs-1 text-maroon"></i>
    
      <i class="fa-brands fa-node fs-1 text-success"></i>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 mt-5">
      <h1 class="poppins fs-5 text-muted text-center" data-aos="zoom-out" data-aos-delay="2000">
        Organization
      </h1>
    </div>
  </div>

  <div class="row py-5 px-3">
    <div class="col-lg-6 d-flex align-items-start justify-content-center mb-5" data-aos="zoom-out">
      <img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/rohis.jpeg') }}" alt="Rohis 5 Depok">
      <div>
        <h4 class="text-dark fw-bold poppins fs-4">Head of Public Relations Division (2019-2020)</h4>
        <p class="mt-2 text-muted poppins fs-6">Served as Head of Public Relations Division in Islamic spiritual extracurricular at public senior high school 5 in Depok, West Java.</p>
      </div>
    </div>

    <div class="col-lg-6 d-flex align-items-start justify-content-center mb-5" data-aos="zoom-out">
      <img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/sc.jpg') }}" alt="Science Club 5 Depok">
      <div>
        <h4 class="text-dark fw-bold poppins fs-4">1st secretary (2019-2020)</h4>
        <p class="mt-2 text-muted poppins fs-6">Served as 1st secretary in science club extracurricula at public senior high school 5 in Depok, West Java.</p>
      </div>
    </div>
  </div>

  @guest
    <div class="toast-container position-fixed bottom-0 start-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="{{ asset('img/formal1000.png') }}" class="rounded-circle me-2 profile-picture" alt="Fikri Dean Radityo">
          <strong class="me-auto">Fikri Dean Radityo</strong>
          <small>One second ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Greeting, welcome to my website! Please sign up to comment on my posts.
        </div>
      </div>
    </div>
  @else
  <div aria-live="polite" aria-atomic="true" class="position-relative">
    <div class="toast-container bottom-0 start-0">
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="top"></div>
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="bottom"></div>
    </div>
  </div>
  @endguest
  

@endsection