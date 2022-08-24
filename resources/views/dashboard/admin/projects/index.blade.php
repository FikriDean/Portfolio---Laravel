@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Manage Projects</h1>

  <div class="border-top my-3"></div>
  
  <a href="/dashboard/admin/projects/create" class="btn btn-primary mt-2 mb-3">Insert Project</a>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-10">
    <table class="table table-sm bg-light text-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Uploaded By</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->user->name }}</td>
            <td>{{ $project->category->name }}</td>
            <td class="d-flex flex-wrap">
              <a href="/dashboard/admin/projects/{{ $project->slug }}" class="btn btn-success btn-sm m-1"><span data-feather="info" class="align-text-bottom"></span></a>
              <a href="/dashboard/admin/projects/{{ $project->slug }}/edit" class="btn btn-warning btn-sm m-1"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="/dashboard/admin/projects/{{ $project->slug }}" method="POST">
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

