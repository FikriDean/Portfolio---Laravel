@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Edit Certificate</h1>

  <div class="border-top my-3"></div>

  <form action="/dashboard/admin/certificates/{{ $certificate->slug }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label text-dark">Title</label>
      <input type="text" class="form-control bg-light text-dark @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $certificate->title) }}" autofocus>
    </div>

    @error('title')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="category" class="form-label text-dark">Category</label>
      <select class="form-select bg-light text-dark @error('category_id') is-invalid @enderror" name="category_id" required>
        <option selected>--Choose Category--</option>
        @foreach ($categories as $category)
          @if (old('category_id', $certificate->category->id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      
      </select>
    </div>

    @error('category_id')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="image" class="form-label text-dark">Certificate Image</label>
      <input class="form-control bg-light text-dark @error('category_id') is-invalid @enderror" type="file" id="image" name="image">
      <img src="{{ asset($certificate->image) }}" alt="Profile Photo" class="p-3 text-dark w-100 mw-500">
    </div>

    @error('image')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-3">
      <label for="body" class="form-label text-dark">Body</label>

      @error('body')
        <div class="alert alert-danger p-0">
          {{ $message }}
        </div>
      @enderror

      <input id="body" type="hidden" name="body" required value="{{ old('body', $certificate->body) }}">
      <trix-editor class="bg-light text-dark" input="body"></trix-editor>
    </div>

    <div class="mb-3">
      <label for="link" class="form-label text-dark">URL Link</label>
      <input type="text" class="form-control bg-light text-dark @error('link') is-invalid @enderror" id="link" name="link" required value="{{ old('link', $certificate->link) }}">
    </div>

    @error('link')
      <div class="alert alert-danger p-0">
        {{ $message }}
      </div>
    @enderror

    <button type="submit" class="btn btn-primary w-100">Edit Certificate</button>
    <a href="/dashboard/admin/certificates" class="btn btn-outline-primary w-100 mt-2">Back to Certificates</a>
  </form>
</div>

@endsection