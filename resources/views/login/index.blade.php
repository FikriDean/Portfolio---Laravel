@extends('layouts.main')

<x-navbar></x-navbar>

@section('container')

<main class="form-signin m-auto">
  <div class="row">
    <div class="col-lg-3 col-sm-12"></div>
    <div class="col-lg-6 col-sm-12">
      <h1 class="h3 mb-4 fw-normal text-center" data-aos="fade-down" data-aos-delay="1000">Please log in</h1>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="form-floating my-3" data-aos="fade-down" data-aos-delay="1200">
          <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}" autocomplete="off">
          <label for="email" class="d-flex bg-transparent text-dark border border-0">Email address</label>
        </div>

        @error('email')
          <div class="alert alert-danger p-0">
            {{ $message }}
          </div>
        @enderror
    
        <div class="form-floating my-3"  data-aos="fade-down" data-aos-delay="1300">
          <input type="password" class="form-control rounded-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="off">
          <label for="password" class="d-flex bg-transparent text-dark border border-0">Password</label>
        </div>

        @error('password')
          <div class="alert alert-danger p-0">
            {{ $message }}
          </div>
        @enderror

        <button class="btn btn-primary w-100" type="submit" data-aos="zoom-out" data-aos-delay="1400">Log in</button>
      
      </form>
    </div>
  </div>
    
</main>

@endsection