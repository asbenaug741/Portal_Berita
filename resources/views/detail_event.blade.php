@extends('layouts.main')

@section('container')
<!-- content -->
<div class="row">
  <div class="col-lg-2"></div>

  <div class="content col-lg-8 mt-2 shadow-sm p-3 mb-5 bg-body rounded">
    <!-- berita utama -->
    <img src="img/img.jpg" class="berita img-fluid mx-4 mt-1" width="93%" height="10rem">

    <section class="newsutama mx-4 p-3">
      <hr>
      <h3 class="judulberita card-title"><b>Kasus Covid Tinggi Di Indonesia Masuk Berita Di Media Korea Utara</b></h3>
      <p class="card-text"><small class="text-muted"> 3 mins ago</small></p>
      <hr>
      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem aperiam quas neque laudantium itaque blanditiis, placeat recusandae ratione illo optio, amet, cum velit dolor consequuntur labore ipsum eum rem impedit fugit deleniti repudiandae mollitia quasi? Ipsa consequatur assumenda facere possimus a repellendus molestiae? Error neque minima ad voluptatem saepe officia illum eum velit rerum cupiditate culpa reiciendis accusamus qui quo voluptatum doloremque quos assumenda, illo minus iure at ullam voluptas. Perspiciatis culpa quisquam quod, pariatur corporis facilis voluptatem inventore incidunt aspernatur, vel illum quis nisi, quasi laboriosam eos cumque a fuga hic omnis ipsum laborum ea dolore! Inventore, suscipit libero!</p>
      <p class="card-text">Artikel ini telah tayang di Kompas.com dengan judul "UTBK SBMPTN 2022: Simak Tahapan Pendaftaran, Materi Tes dan Jadwal", Klik untuk baca: https://www.kompas.com/edu/read/2022/03/01/135507171/utbk-sbmptn-2022-simak-tahapan-pendaftaran-materi-tes-dan-jadwal.
        Penulis : Mahar Prastiwi
        Editor : Mahar Prastiwi</p>
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
<!-- end of content -->
@endsection