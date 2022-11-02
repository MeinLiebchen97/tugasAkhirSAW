<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">SPK SAW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
            </li>
            @auth
              <li class="nav-item">
              <a class="nav-link {{ Request::is('saw*') ? 'active' : '' }}" href="/saw">SAW</a>
              </li>    
            @endauth
        </ul>

        <ul class= "navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      {{-- <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li> --}}
                        <li>
                            <form action="signout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
                            </form>
                        </li>
                    </ul>
                  </li>
                @else
                
                <li class= "nav-item">
                    <a href="/signin" class="nav-link {{ Request::is('signin') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> 
                        Sign In</a>
                </li>
                @endauth
            </ul>

    </div>
</div>
  </nav>