@extends('dashboard.layouts.main')

@section('container')

<div class="pt-3 pb-2 mb-3">

  <h1 class="h2 text-dark">{{ $certificate->title }}</h1>

  <div class="border-top my-3"></div>

  <a href="/dashboard/admin/certificates" class="btn btn-outline-primary mt-2">Back to Certificates</a>

  <div class="row">
    <div class="col-lg-5 d-flex justify-content-center mt-4">
      <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->title }}" class="img-fluid mw-500 w-100 shadow-lg rounded">
    </div>
    
    <div class="col-lg-7 d-flex flex-column align-items-center">
      <div class="row d-flex justify-content-center align-items-center w-100">
        <div class="col-lg-3 d-flex justify-content-center align-items-center mt-4">
          <a class="btn btn-warning" href="/dashboard/admin/certificates/{{ $certificate->slug }}/edit">
            <span data-feather="edit" class="align-text-bottom"></span> Edit
          </a>
        </div>
        <div class="col-lg-3 d-flex justify-content-center align-items-center mt-4">
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#dataCollapse" role="button" aria-expanded="false" aria-controls="dataCollapse" id="collapseButton">
            Hide Informations
          </a>
        </div>
        <div class="col-lg-3 d-flex justify-content-center align-items-center mt-4">
          @isset($certificate->link)
            <a class="btn btn-success" href="{{ $certificate->link }}">
              View Certificate
            </a>
          @endisset
        </div>
        <div class="col-lg-3 d-flex justify-content-center align-items-center mt-4">
          <form class="" action="/dashboard/admin/certificates/{{ $certificate->slug }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
              <span data-feather="trash-2" class="align-text-bottom"></span> Delete
            </button>
          </form>
        </div>
      </div>
      
      
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center mt-4">
          <div class="collapse multi-collapse show" id="dataCollapse">
            <div class="d-flex flex-row">
              <table class="table bg-light text-dark">
                <tbody>
                  <tr>
                    <td>Title</td>
                    <td>{{ $certificate->title }}</td>
                  </tr>
                  <tr>
                    <td>Category</td>
                    <td>{{ $certificate->category->name }}</td>
                  </tr>
                  <tr>
                    <td>Uploader</td>
                    <td>{{ $certificate->user->name }}</td>
                  </tr>
                  <tr>
                    <td>Uploaded at</td>
                    <td>{{ $certificate->created_at->diffForHumans() }}</td>
                  </tr>
                  <tr>
                    <td>Last Updated</td>
                    <td>{{ $certificate->updated_at->diffForHumans() }}</td>
                  </tr>
                  <tr>
                    <td>Body</td>
                    <td>{!! $certificate->body !!}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection