@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
  <div class="col-sm-6 col-md-3">
    <a href="/dashboard/event">
      <div class="card card-stats content shadow">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center big-icon">
              <i class="bi bi-calendar-event" ></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Event</p>
              <p class="card-title">{{ count($event) }}</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <a href="/dashboard/book"><div class="card card-stats shadow">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center big-icon">
              <i class="bi bi-book"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Books</p>
              <p class="card-title">{{ count($book) }}</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <a href="/dashboard/buletin"><div class="card card-stats shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center big-icon">
              <i class="bi bi-journal-text"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Buletin</p>
              <p class="card-title">{{ count($buletin) }}</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <a href="/dashboard/news"><div class="card card-stats shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center big-icon">
              <i class="bi bi-newspaper"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">News</p>
              <p class="card-title">{{ count($news) }}</p>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
</div>
    


@endsection