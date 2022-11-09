<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="sidetext align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/event') ? 'active' : ''}}" href="/dashboard/event">
            <span data-feather="file" class="align-text-bottom"></span>
            Event
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/buletin') ? 'active' : ''}}" href="/dashboard/event">
            <span data-feather="file" class="align-text-bottom"></span>
            Buletin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/news') ? 'active' : ''}}" href="/dashboard/event">
            <span data-feather="file" class="align-text-bottom"></span>
            News
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/books') ? 'active' : ''}}" href="/dashboard/event">
            <span data-feather="file" class="align-text-bottom"></span>
            New Books
          </a>
        </li>
      </ul>
    </div>
  </nav>