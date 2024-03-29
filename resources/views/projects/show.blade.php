@extends('layouts.main')

@section('container')
  
<div class="row d-flex justify-content-start align-items-center mt-2" data-aos="fade-down" data-aos-delay="700">
  <div class="col-lg-12 d-flex justify-content-start">
    {{ Breadcrumbs::render('project', $project) }}
  </div>
</div>

  <div class="row" data-aos="zoom-out" data-aos-delay="1000">
    <div class="col-lg-12 d-flex justify-content-center mt-4">
      <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid w-75 mw-500 shadow-lg rounded">
    </div>
  </div>

  <div class="row d-flex justify-content-center m-1">
    <div class="col-lg-8 d-flex flex-column align-items-start mt-5" data-aos="fade-down" data-aos-delay="200">
      <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#dataCollapse" role="button" aria-expanded="false" aria-controls="dataCollapse" id="collapseButton">
          Hide Informations
        </a>
        <a class="btn btn-success" href="{{ $project->link }}" target="_blank">
          View project
        </a>
      </p>
      
      <div class="collapse multi-collapse show w-100" id="dataCollapse">
        <div class="d-flex flex-row">
          <table class="table bg-light text-dark">
            <tbody>
              <tr>
                <td>Title</td>
                <td>{{ $project->title }}</td>
              </tr>
              <tr>
                <td>Category</td>
                <td>{{ $project->category->name }}</td>
              </tr>
              <tr>
                <td>Uploader</td>
                <td>{{ $project->user->name }}</td>
              </tr>
              <tr>
                <td>Uploaded at</td>
                <td>{{ $project->created_at->diffForHumans() }}</td>
              </tr>
              <tr>
                <td>Last Updated</td>
                <td>{{ $project->updated_at->diffForHumans() }}</td>
              </tr>
              <tr>
                <td>About</td>
                <td>{!! $project->body !!}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-4 rounded d-flex flex-column flex-wrap justify-content-start p-4 border border-1 mt-5 bg-light text-dark" data-aos="fade-down" data-aos-delay="200">
      <h5 class="text-center">Comments</h5>

      <form action="/comment" method="POST" class="d-flex justify-content-center align-items-center my-3">
        @csrf
        
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        <input type="hidden" name="project_slug" value="{{ $project->slug }}">

        <div class="form-floating mx-2 col-lg-8 col-sm-12">
          <input type="text" class="form-control bg-light text-dark" id="body" name="body" placeholder="name@example.com">
          <label for="body" class="d-flex bg-transparent text-dark border-0">Add comment here</label>
        </div>
        
        @auth
          <button class="btn btn-primary mx-2 col-lg-4 col-sm-12" type="submit">Add Comment</button>
        @else
          <a href="/login" class="btn btn-primary btn-sm mx-2 col-lg-4 col-sm-12">Log in to comment!</a>
        @endauth
      </form>

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @isset($comments)
        @foreach ($comments as $comment)
        <div class="card border border-0 bg-light text-dark">
          <div class="card-body d-flex justify-content-start border border-1 p-3 my-2 rounded">
            <div>
              <img class="rounded-circle profile-picture" src="{{ asset($comment->user->image)}}" alt="Profile Photo">
            </div>
            <div class="mx-2 d-flex flex-column align-items-start">
              <small class="text-muted text-start">{{ $comment->user->name }} • {{ $comment->updated_at->diffForHumans() }}</small>
              <p class="p-0 m-0 text-start">{{ $comment->body }}</p>
              @if ($comment->created_at != $comment->updated_at)
                <small class="text-muted">Edited</small>  
              @endif
              @auth
                @if (auth()->user()->id === $comment->user->id || auth()->user()->is_admin == 1)
                  <div class="d-flex mt-2">
                    <form action="/comment/{{ $comment->id }}" method="POST">
                      @csrf
                      @method('delete')

                      <button type="submit" class="btn btn-danger btn-sm px-4 py-2"><i class="bi bi-x-circle-fill"></i></button>
                    </form>
                  </div>
                @endif
              @endauth
              
              </div>
            </div>
          </div>
        @endforeach
      @endisset
      
      
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center my-4">
      
    </div>
  </div>

@endsection