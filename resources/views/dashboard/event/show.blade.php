@extends('dashboard.layout.main')

@section('container')

<div class="row">
    <div class="col-lg-2"></div>
  
    <div class="content col-lg-8 mt-2 shadow-sm p-3 mb-5 bg-body rounded">
      <!-- berita utama -->
      <img src="{{ asset('storage/'.$event->gambar) }}" class="berita img-fluid mx-4 mt-1" >
  
      <section class="newsutama mx-4 p-3">
        <hr>
        <h3 class="judulberita card-title"><b>{{ $event->nama_event }}</b></h3>
        <hr>
        <p class="card-text">{{ $event->deskripsi }}</p>
        <div class="garis mt-5 mb-5"></div>
  
        {{-- event lain --}}
        <h3>Event Lainnya</h3>
        <div class="scrollbar">
          <div class="item" style="width: 15rem;">
            <img src="img/img2.jpg" class="card-img-top">
            <div class="card m-2">
              <h6>Lorem ipsum dolor sit amet. asdas asd asdas ds</h6>
            </div>
          </div>
          <div class="item" style="width: 15rem;">
            <img src="img/img3.jpg" class="card-img-top">
            <div class="card m-2">
              <h6>Lorem ipsum dolor sit amet.</h6>
            </div>
          </div>
          <div class="item" style="width: 15rem;">
            <img src="img/img2.jpg" class="card-img-top">
            <div class="card m-2">
              <h6>Lorem ipsum dolor sit amet.</h6>
            </div>
          </div>
          <div class="item" style="width: 15rem;">
            <img src="img/img3.jpg" class="card-img-top">
            <div class="card m-2">
              <h6>Lorem ipsum dolor sit amet.</h6>
            </div>
          </div>
        </div>
      </section>
  
      <div class="iklan2 mt-3">
        <img src="img/iklan.png" alt="iklan tipe 2">
      </div>
    </div>
    <div class="col-lg-2"></div>
  </div>

@endsection