@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Create New User</h1>

  <div class="border-top my-3"></div>

  <form action="/dashboard/admin/users" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label text-dark">Name</label>
      <input type="text" class="form-control bg-light text-dark @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" autofocus>
    </div>

    @error('name')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="username" class="form-label text-dark">Username</label>
      <input type="text" class="form-control bg-light text-dark @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}" autofocus>
    </div>

    @error('username')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="email" class="form-label text-dark">Email</label>
      <input type="email" class="form-control bg-light text-dark @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}" autofocus>
    </div>

    @error('email')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="password" class="form-label text-dark">Password</label>
      <input type="password" class="form-control bg-light text-dark @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password') }}" autofocus>
    </div>

    @error('password')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="image" class="form-label text-dark">Profile Picture</label>
      <input class="form-control btn-secondary bg-light text-dark  @error('category_id') is-invalid @enderror" type="file" id="image" name="image">
    </div>

    @error('image')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin">
      <label class="form-check-label mx-1 fw-bold text-dark" for="is_admin">
        Administrator Access
      </label>
      
    </div>

    <button type="submit" class="btn btn-primary w-100">Create New User</button>
    <a href="/dashboard/admin/users" class="btn btn-outline-primary w-100 mt-2">Back to Users</a>
  </form>
</div>
@endsection

