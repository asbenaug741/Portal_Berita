@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats content shadow">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="bi bi-calendar-event-fill"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Event</p>
              <h4 class="card-title">1</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats shadow">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="flaticon-coins text-success"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Books</p>
              <h4 class="card-title">45</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="flaticon-error text-danger"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">Buletin</p>
              <h4 class="card-title">23</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="flaticon-twitter text-primary"></i>
            </div>
          </div>
          <div class="col-7 col-stats">
            <div class="numbers">
              <p class="card-category">News</p>
              <h4 class="card-title">45</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    


@endsection