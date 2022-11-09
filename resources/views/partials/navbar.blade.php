<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #57A4FF;">
    <div class="container">
        <a class="navbar-brand ms-5" href="/">
            <img src="logo/logo.png" alt="logo" height="70em" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/news') ? 'active' : ''}}" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/buletin') ? 'active' : ''}}" href="/buletin">Buletin</a>
                </li>

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ auth()->user()->username }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-collection-fill"></i> Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </button>
                        </form>
                    </ul>
                  </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth

                
            </ul>

            
            <form class="d-flex me-5">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px; border-radius:20px;">
                <button type="button" class="btn btn-outline">Search</button>
            </form>
        </div>
    </div>
</nav>