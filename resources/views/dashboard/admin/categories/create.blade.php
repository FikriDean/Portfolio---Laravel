@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Create New Category</h1>

  <div class="border-top my-3"></div>

  <form action="/dashboard/admin/categories" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label text-dark">Category Name</label>
      <input type="text" class="form-control bg-light text-dark @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" autofocus>
    </div>

    @error('name')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <button type="submit" class="btn btn-primary w-100">Create New Category</button>
    <a href="/dashboard/admin/categories" class="btn btn-outline-primary w-100 mt-2">Back to Categories</a>
  </form>
</div>



@endsection