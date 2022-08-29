  
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">My Profile</h1>

  <div class="border-top my-3"></div>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  
  <div class="row">
    <div class="col-lg-6 d-flex flex-wrap justify-content-center align-items-center">
      <div class="d-flex flex-column justify-content-center align-items-center mx-5 mt-4">
        <img src="{{ asset($user->image) }}" alt="{{ $user->name }}" class="rounded-circle shadow-lg profile-card">
        <a href="/dashboard/user/{{ $user->username }}/edit" class="btn btn-warning btn-sm mt-4"><span data-feather="edit" class="align-text-bottom"></span> Edit Profile</a>
      </div>
    </div>
    
    <div class="col-lg-6 d-flex flex-wrap justify-content-center align-items-center">
      <div class="card card-middle bg-light text-dark border border-1 d-flex justify-content-start mt-4 p-4">
        <div class="card-header fw-semibold border border-0 fs-5 text-primary text-center">
          @<span></span>{{ $user->username }}
        </div>

        <div class="card-body border border-0 text-center">
          <h5 class="card-title text-capitalize fs-2">{{ $user->name }}</h5>
          <p class="card-text mt-3 fs-6"><i class="bi bi-envelope-check-fill"></i> {{ $user->email }}</p>
          <p class="card-text fs-6">joined since {{ $user->created_at->diffForHumans() }}</p>
          <a href="/forgot-password" class="btn btn-danger btn-sm mt-4"><span data-feather="shield" class="align-text-bottom"></span> Reset Password</a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection