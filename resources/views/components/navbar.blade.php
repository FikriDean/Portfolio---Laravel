@php
  function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
@endphp

<nav class="navbar navbar-expand-lg bg-light" data-aos="fade-down" data-aos-delay="500">
  <div class="container">
    <a class="navbar-brand mono text-dark" href="/">Dean - 2022</a>
    <div>
      <a class="text-decoration-none mono text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        Menu
      </a>
    </div>
  </div>
</nav>

<div class="offcanvas offcanvas-start bg-white text-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dean - 2022</h5>
    <button type="button" class="bg-transparent border-0 fs-4 text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-circle"></i></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active ' : '' }}" href="/">Home</a>
      </li>

      <li class="nav-item border-bottom pb-2">
        <a class="nav-link {{ Request::is('certificates*') ? 'active ' : '' }}" href="/certificates">Certificates</a>
      </li>

      <li class="nav-item mt-3">
        <div class="form-check form-switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch" />
          <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
        </div>

      </li>

      @auth
        <div class="dropdown mt-3 bg-light text-light">
          <button class="btn btn-outline-secondary btn-sm dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu bg-light border border-primary">     
            <li><a class="dropdown-item border-bottom text-dark" href="/dashboard"><i class="bi bi-speedometer2"></i> My Dashboard</a></li>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <li><button class="dropdown-item mt-2 text-dark" type="submit">Log out <i class="bi bi-box-arrow-right"></i></button></li>
            </form>
          </ul>
        </div>

      @else
        <li class="nav-item mt-4">
          <a class="btn btn-primary {{ Request::is('projects') ? 'active ' : '' }} w-100" href="/login">Log in</a>
        </li>

        <li class="nav-item mt-2">
          <a class="btn btn-outline-primary {{ Request::is('projects') ? 'active ' : '' }} w-100" href="/register">Sign up</a>
        </li>
      @endauth
      

    </ul>
  </div>
</div>