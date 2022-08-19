@extends('layouts.main')

<x-navbar></x-navbar>

@section('container')
  <div class="row my-5">
    <div class="col-lg-3 col-sm-12"></div>
    <div class="col-lg-6 col-sm-12">
      <main class="form-signin m-auto">
        <h1 class="h3 mb-4 fw-normal text-center" data-aos="fade-down" data-aos-delay="1000">Please sign up</h1>
    
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-floating my-3" data-aos="fade-down" data-aos-delay="1200">
            <input type="text" class="form-control rounded-3 @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}" autocomplete="off">
            <label for="name" class="d-flex bg-transparent border border-0">Name</label>
          </div>
    
          @error('name')
            <div class="alert alert-danger p-0">
              {{ $message }}
            </div>
          @enderror
    
          <div class="form-floating my-3" data-aos="fade-down" data-aos-delay="1300">
            <input type="text" class="form-control rounded-3 @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}" autocomplete="off">
            <label for="username" class="d-flex bg-transparent border border-0">Username</label>
          </div>
    
          @error('username')
            <div class="alert alert-danger p-0">
              {{ $message }}
            </div>
          @enderror
    
          <div class="form-floating my-3" data-aos="fade-down" data-aos-delay="1400">
            <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}" autocomplete="off">
            <label for="email" class="d-flex bg-transparent border border-0">Email address</label>
          </div>
    
          @error('email')
            <div class="alert alert-danger p-0">
              {{ $message }}
            </div>
          @enderror
      
          <div class="form-floating my-3" data-aos="fade-down" data-aos-delay="1500">
            <input type="password" class="form-control rounded-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="off">
            <label for="password" class="d-flex bg-transparent border border-0">Password</label>
          </div>
    
          @error('password')
            <div class="alert alert-danger p-0">
              {{ $message }}
            </div>
          @enderror
    
          <button class="btn btn-primary w-100" type="submit" data-aos="zoom-out" data-aos-delay="1600">Sign up</button>
        
        </form>
      </main>
    </div>
  </div>
  
@endsection