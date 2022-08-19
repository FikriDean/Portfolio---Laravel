@extends('layouts.main')

<x-navbar />

@section('container')

  <div class="row d-flex justify-content-center align-items-center mt-4 p-4">

    <div class="col-lg-6 d-flex flex-column align-items-center">
      <img src="{{ asset('img/formal1000.png') }}" alt="FIKRI DEAN RADITYO" class="square-middle rounded-circle shadow-lg" data-aos="zoom-in" data-aos-delay="1000">
      <h1 class="my-3 poppins fw-light text-center fs-3 text-dark" data-aos="zoom-in" data-aos-delay="1200">Fikri Dean Radityo</h1>
      <i class="bi bi-laptop text-dark" data-aos="zoom-in" data-aos-delay="1400"></i>
      <h1 class="mt-3 mono fw-normal fs-5 text-dark" data-aos="zoom-in" data-aos-delay="1600">Web Developer</h1>
    </div>

    <div class="col-lg-6 d-flex justify-content-center">
      <div class="row display-3 text-primary d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="1800">
        <a href="https://www.linkedin.com/in/fikri-dean-radityo-23bb3621a/" class="btn fs-1 col-lg-6 p-5 border-end border-bottom rounded-0 translate-topleft border-2 text-dark" target="_blank">
          <i class="bi bi-linkedin" data-aos="zoom-out" data-aos-delay="2000"></i>
        </a>
        
        <a href="https://github.com/FikriDean?tab=repositories" class="btn fs-1 col-lg-6 p-5 border-start border-bottom rounded-0 translate-topright border-2 text-dark" target="_blank">
          <i class="bi bi-github" data-aos="zoom-out" data-aos-delay="2200"></i>
        </a>
        
        <a href="https://www.freecodecamp.org/fikridean" class="btn fs-1 col-lg-6 p-5 border-top border-end rounded-0 translate-bottomleft border-2 text-dark" target="_blank">
          <i class="bi bi-layers-fill" data-aos="zoom-out" data-aos-delay="2400"></i>
        </a>

        <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxjNTrmfdDXPfKPVVCVpCphJQMhgpjVsvRVsmKWKbFsXHXTRkCQnQtXDxHBKzQQSmXBgbf" class="btn fs-1 col-lg-6 p-5 border-top border-start rounded-0 translate-bottomright border-2 text-dark" target="_blank">
          <i class="bi bi-envelope-fill" data-aos="zoom-out" data-aos-delay="2600"></i>  
        </a>
      </div>
    </div>
    
  </div>

@endsection