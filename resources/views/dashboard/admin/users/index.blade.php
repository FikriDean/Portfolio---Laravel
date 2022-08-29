@extends('dashboard.layouts.main')

@section('container')
<div class="pt-3 pb-2 mb-3">
  <h1 class="h2 text-dark">Manage Users</h1>

  <div class="border-top my-3"></div>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-sm bg-light text-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Image</th>
          <th scope="col">Access</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="text-break">{{ $user->name }}</td>
            <td class="text-break">{{ $user->username }}</td>
            <td class="text-break">{{ $user->email }}</td>
            <td>
              <img src="{{ asset($user->image) }}" alt="{{ $user->username }}" class="profile-picture rounded-circle">
            </td>
            <td class="text-break">
              @if ($user->is_admin == 1)
                Administrator
              @else
                Member
              @endif
            </td>
            <td class="d-flex flex-wrap">
              <a href="/dashboard/admin/users/{{ $user->username }}/edit" class="btn btn-warning btn-sm m-1"><span data-feather="edit" class="align-text-bottom"></span></a>
              <form action="/dashboard/admin/users/{{ $user->username }}" method="POST">
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

