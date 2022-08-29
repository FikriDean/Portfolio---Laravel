@extends('layouts.main')


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

  <div class="row my-5" data-aos="flip-up" data-aos-delay="2800">
    <div class="col-sm-12 d-flex justify-content-center">
      <p class="mono text-center text-dark">
        Contact: &#x1F1EE;&#x1F1E9; <a href="https://wa.me/6281387000325?text=Hello%20there%2C%20I'd%20like%20to%20work%20with%20ya!" target="_blank">+62 813-8700-0325 (WhatsApp)</a>
      </p>
    </div>
  </div>

  @guest
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
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
    <div class="toast-container bottom-0 end-0">
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="top"></div>
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="bottom"></div>
    </div>
  </div>
  @endguest
  

@endsection