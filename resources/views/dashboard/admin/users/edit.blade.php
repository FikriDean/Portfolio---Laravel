@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Edit User</h1>

  <div class="border-top my-3"></div>

  <form action="/dashboard/admin/users/{{ $user->username }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name" class="form-label text-dark">Name</label>
      <input type="text" class="form-control bg-light text-dark @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $user->name) }}" autofocus>
    </div>

    @error('name')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="username" class="form-label text-dark">Username</label>
      <input type="text" class="form-control bg-light text-dark @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}" autofocus>
    </div>

    @error('username')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="email" class="form-label text-dark">Email</label>
      <input type="email" class="form-control bg-light text-dark @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}" autofocus>
    </div>

    @error('email')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="image" class="form-label text-dark">Profile Picture</label>
      <input class="form-control btn-secondary bg-light text-dark  @error('category_id') is-invalid @enderror" type="file" id="image" name="image">
      <img src="{{ asset($user->image) }}" alt="{{ $user->username }}" class="profile-picture mt-3 rounded-circle">
    </div>

    @error('image')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <input class="form-check-input bg-light text-dark" type="checkbox" name="is_admin" id="is_admin">
      <label class="form-check-label mx-1 fw-bold text-dark" for="is_admin">
        Administrator Access
      </label>
        @if ($user->is_admin == 1)
          <span class="badge text-bg-danger">Access Before : Administrator</span>
        @else
          <span class="badge text-bg-success">Access Before : Member</span>
        @endif
      
    </div>

    <button type="submit" class="btn btn-primary w-100">Create New User</button>
    <a href="/dashboard/admin/users" class="btn btn-outline-primary w-100 mt-2">Back to Users</a>

  </form>
</div>
@endsection