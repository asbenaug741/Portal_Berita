@extends('layouts.main')


@section('container')
<div class="row">
  <div class="col-1"></div>
  <!-- content -->
  <div class="content col-lg-7 mt-2 shadow-sm p-3 mb-5 bg-body rounded ">
    <!-- carousel -->
    <section class="carousel my-3 text-center">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($event as $key)
          <div class=
          "@if($loop->first)
          carousel-item active
          @else
          carousel-item" 
          @endif  
          data-bs-interval="5000">
          <a href="detail_event/{{ $key->id }}"><img src="{{ asset('storage/'.$key->gambar) }}" class="img" height="400" width="90%"></a>  
        </div>
          @endforeach
        </div>
      
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <div class="garis"></div>

    <!-- Buletin Putaka -->
    <div class="text-center">
      <section class="buletin">
        <h1 class="text-center my-2">Buletin pustaka</h1>
        <div class="row">

          @foreach($buletin as $key)
          <div class="col-lg-6 md-4 mt-3">
            <div class="card nostrip">
              <a href="detail_buletin/{{ $key->id }}">
                <img src="{{ asset('storage/'.$key->sampul) }}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{ $key->judul }}</h5>
                  <p class="card-text">Edisi: {{ $key->edisi }}</p>
              </div>
            </a>
            </div>
          </div>
          @endforeach
        </div>
      </section>
    </div>
  </div>

  <!-- sidebar -->
  <div class="sidebar col-lg-3 mt-5 ">
    <!-- iklan -->
    <div class="iklan ">
      <img src="img/images.jpeg" height="200rem" width="100%" alt="Iklan 1">
    </div>
    <!-- news  -->
    <div class="news mt-3 mb-3  rounded">
      <h3 class="text-center">Latest News</h3>
      <ul>
        @foreach($news as $key)
        <li class="content shadow-sm rounded nostrip">
          <a href="detail_news/{{ $key->id }}">
          <div class="card rounded mb-3">
            <div class="row g-0">
              <div class="col-md-4" style="margin: auto 0; max-width: 80px; overflow:hidden;">
                <img src="{{ asset('storage/'.$key->sampul) }}" class="card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="size card-title" style="margin: auto 0;">{{ $key->judul_berita }}</h4>
                </div>
              </div>
            </div>
          </div>
        </a>
        </li>
        @endforeach
      </ul>
    </div>
    <!-- iklan -->
    <div class="iklan ">
      <img src="img/images.png" height="200rem" width="100%" alt="Iklan 1">
    </div>
  </div>


</div>

<div class="row">



  <!-- buku baru scroll -->
  <div class="buku col-lg-7 shadow-sm p-3 mb-5 bg-body rounded center">
    <h4>Buku Baru</h4>
    <hr>
    <div class="scroll">

      @foreach($book as $key)
      <div class="item nostrip shadow-sm " style="width: 10rem;">
        <a href="detail_buku/{{ $key->id }}"><img src="{{ asset('storage/'.$key->sampul) }}" class="card-img-top">
          <div class="card m-2">
            <h6>{{ $key->judul_buku }}</h6>
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
  <div class="col-lg-3 mt-5"></div>



</div>
@endsection