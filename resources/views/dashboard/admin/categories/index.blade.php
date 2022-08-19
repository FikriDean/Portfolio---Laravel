@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Manage Categories</h1>

  <div class="border-top my-3"></div>
  
  <a href="/dashboard/admin/categories/create" class="btn btn-primary mt-2 mb-3">Create New Category</a>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show col-lg-8" role="alert">
      {{ session('danger') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-sm bg-light text-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Created At</th>
          <th scope="col">Updated At</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td class="d-flex flex-wrap">
              <a href="/dashboard/admin/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm m-1"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="/dashboard/admin/categories/{{ $category->slug }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm m-1"><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

