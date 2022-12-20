<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link hover {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="sidetext align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/event*') ? 'active' : ''}}" href="/dashboard/event">
            <i class="bi bi-calendar-event"></i>
            Event
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/book*') ? 'active' : ''}}" href="/dashboard/book">
            <i class="bi bi-book"></i>
            Books
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/buletin*') ? 'active' : ''}}" href="/dashboard/buletin">
            <i class="bi bi-journal-text"></i>
            Buletin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/news*') ? 'active' : ''}}" href="/dashboard/news">
            <i class="bi bi-newspaper"></i>
            News
          </a>
        </li>
      </ul>
    </div>
  </nav>