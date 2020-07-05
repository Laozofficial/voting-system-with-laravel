 <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand text-default" href="/">
          <i class="fa fa-vote-yea text-default"></i> Votr
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav active">
            <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{ url('/dashboard') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-tachometer-alt text-default"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>
                 @if (Auth::user()->role === 1)
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('admin/index')) ? 'active' : '' }}" href="{{ url('/admin/index') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-user-alt text-default"></i>
                    <span class="nav-link-text">Admin</span>
                  </a>
                </li>
                 @endif
                {{--  <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/create')) ? 'active' : '' }}" href="{{ url('/workshop/create') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-plus text-default"></i>
                    <span class="nav-link-text">Add Workshop</span>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/add/services')) ? 'active' : '' }}" href="{{ url('/workshop/add/services') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-car-side text-default"></i>
                    <span class="nav-link-text">Add Services</span>
                  </a>
                </li>  --}}

                {{-- <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/add/services')) ? 'active' : '' }}" href="{{ url('/workshop/add/services') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-car-side text-default"></i>
                    <span class="nav-link-text">Services</span>
                  </a>
                </li> --}}
              {{--  <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('workshop/earnings')) ? 'active' : '' }}" href="{{ url('/workshop/earnings') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-credit-card text-default"></i>
                    <span class="nav-link-text">Earnings</span>
                  </a>
                </li>
                   <li class="nav-item ">
                  <a class="nav-link {{ (request()->is('workshop/feedback')) ? 'active' : '' }}" href="{{ url('/workshop/feedback') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-question text-default"></i>
                    <span class="nav-link-text">Feedbacks</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/settings')) ? 'active' : '' }}" href="{{ url('/workshop/settings') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-cog text-default"></i>
                    <span class="nav-link-text">Settings</span>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/customers')) ? 'active' : '' }}" href="{{ url('/workshop/customers') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-users text-default"></i>
                    <span class="nav-link-text">Customers</span>
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/bookings')) ? 'active' : '' }}" href="{{ url('/workshop/bookings') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-book-open text-default"></i>
                    <span class="nav-link-text">Bookings | Appointments</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('workshop/messages')) ? 'active' : '' }}" href="{{ url('/workshop/messages') }}" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="fa fa-paper-plane text-default"></i>
                    <span class="nav-link-text">Send Promotional Messages</span>
                  </a>
                </li>  --}}
                
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          {{--  <h6 class="navbar-heading p-0 text-muted">Documentation</h6>/  --}}
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <input type="hidden">
                <button type="submit" style="background-color: transparent;border: none;padding:0; margin:0">
                  <a class="nav-link" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="ni ni-user-run text-default"></i> 
                    <span class="nav-link-text">Logout</span>
                  </a>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>