<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column mt-2">
      
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard">
          <span data-feather="file-text" class="align-text-bottom"></span>
          Home
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/user') || Request::is('dashboard/user/*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/user">
          <span data-feather="user" class="align-text-bottom"></span>
          My Profile
        </a>
      </li>

      <div class="border-top my-4"></div>

      <li class="nav-item mx-3">
        <div class="form-check form-switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch" />
          <label class="custom-control-label" for="darkSwitch"></label>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-secondary" aria-current="page" href="/certificates">
          <span data-feather="layers" class="align-text-bottom"></span>
          Leave Dashboard
        </a>
      </li>

      <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
    
          <button type="submit" class="nav-link text-secondary bg-transparent border-0">
            <span data-feather="log-out" class="align-text-bottom">
            </span> Log out
          </button>
        </form>
      </li>

      @can('admin')

      <div class="border-top mt-4 mb-1 border-danger"></div>
      
      <li class="nav-item mt-3 d-flex justify-content-center">
        <a class="nav-link text-danger border-danger border-bottom d-inline" aria-current="page">
          <i class="fa-solid fa-lock"></i> Administrator Access
        </a>
      </li>
      
      {{-- <li class="nav-item">
        <a class="nav-link text-secondary d-flex flex-row" aria-current="page">
          •••
        </a>
      </li> --}}

      <li class="nav-item mt-2">
        <a class="nav-link {{ Request::is('dashboard/admin/certificates*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/admin/certificates">
          <span data-feather="slack" class="align-text-bottom"></span>
          Manage Certificates
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/admin/projects*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/admin/projects">
          <span data-feather="code" class="align-text-bottom"></span>
          Manage Projects
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/admin/categories*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/admin/categories">
          <span data-feather="columns" class="align-text-bottom"></span>
          Manage Categories
        </a>
      </li>

      <li class="nav-item mb-3">
        <a class="nav-link {{ Request::is('dashboard/admin/users*') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/dashboard/admin/users">
          <span data-feather="users" class="align-text-bottom"></span>
          Manage Users
        </a>
      </li>

      <div class="border-top my-1 border-danger"></div>
      
      @endcan

    </ul>
  </div>
</nav>