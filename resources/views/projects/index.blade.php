@extends('layouts.main')

@section('container')

  <div class="row d-flex justify-content-start align-items-center mt-2" data-aos="fade-down" data-aos-delay="700">
    <div class="col-lg-12 d-flex justify-content-start">
      {{ Breadcrumbs::render('projects') }}
    </div>
  </div>

  <form action="/projects" method="GET">

    @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
    @endif

    @if(request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
    @endif

    <div class="row">
      <div class="col-lg-12">
        <div class="input-group my-3">
          <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-out" data-aos-delay="1000">
            @if (request('category'))
                {{ request('category') }}
            @else
                All Category
            @endif
          </button>
    
          <ul class="dropdown-menu bg-light">
            <li>
              <a class="dropdown-item {{ request('category') == '' ? 'active text-light' : 'text-dark' }}" href="/projects?category=">All Category</a>
            </li>
            @foreach ($categories as $category)
              <li>
                <a class="dropdown-item {{ request('category') == $category->slug ? 'active text-light' : 'text-dark' }}" href="/projects?category={{ $category->slug }}">{{ $category->name }}</a>
              </li>
            @endforeach
          </ul>
        
          <input type="text" class="form-control bg-light text-dark" placeholder="Search" name="search-input" value="{{ request('search-input') }}" autofocus data-aos="zoom-out" data-aos-delay="1200">
    
          <button class="btn btn-primary" type="submit" data-aos="zoom-out" data-aos-delay="1400"><i class="bi bi-search"></i></button>
        </div>
      </form>
      </div>
    </div>
    

    @isset($projects)
    <div class="row mt-4" data-aos="zoom-out" data-aos-delay="1600">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        {{ $projects->links() }}
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      @php
        $i = 1800;
      @endphp

      @foreach ($projects as $project)
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center my-2" data-aos="zoom-in" data-aos-delay="{{ $i }}">
          <div class="card bg-light text-dark d-flex justify-content-center align-items-center card-square">
            <img src="{{ asset($project->image) }}" class="card-img-top rectangle-middle mt-4 rounded" alt="{{ $project->title }}">
            <div class="card-body d-flex flex-column justify-content-between mt-4 w-100">
              <div>
                <h5 class="card-title text-center w-100">{{ $project->title }}</h5>
                <p class="card-text text-center w-100">
                  @php
                    if (strlen($project->excerpt) > 50) {
                      echo substr($project->excerpt, 0, 50) . '...';
                    } else {
                      echo $project->excerpt;
                    }
                  @endphp 
                </p>
              </div>
              
              <a href="projects/{{ $project->slug }}" class="btn btn-primary mt-3 w-100">View project</a>
            </div>
          </div>
        </div>
        @php
          $i = $i + 100;
        @endphp
      @endforeach
    </div>

    @if ($projects->total() > 8)
      <div class="row mt-4 mb-5">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          {{ $projects->links() }}
        </div>
      </div>
    @endif
    
  @endisset

  
  @if (count($projects) == 0)
    <x-noresult></x-noresult>
  @endif

@endsection