  
@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Hello again, {{ auth()->user()->name }}</h1>

  <div class="border-top my-3"></div>

  <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
    <h4 class="alert-heading">
      <i class="bi bi-check-circle-fill"></i> Greetings!
    </h4>
    <p class="mb-0">
      Thank you so much for viewing my website!
    </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <div class="row">
    <div class="col-lg-3">
      <div class="card p-2 bg-light text-dark">
        <img src="{{ asset(auth()->user()->image) }}" class="card-img-top mx-auto w-75 rounded-circle square-middle" alt="{{ auth()->user()->name }}">
        <div class="card-body">
          <h5 class="card-title">You can customize your profile photo!</h5>
          <p class="card-text">Click the button below to change your profile</p>
          <a href="/dashboard/user/{{ auth()->user()->username }}/edit" class="btn btn-primary w-100">Change Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

