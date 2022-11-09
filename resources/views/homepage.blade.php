@extends('layouts.main')


@section('container')
<div class="row">
  <div class="col-1"></div>
  <!-- content    -->
  <div class="content col-lg-7 mt-2 shadow-sm p-3 mb-5 bg-body rounded ">
    <!-- carousel -->
    <section class="carousel my-3 text-center">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <a href="/detail_event"><img src="img/img.jpg" class="img" height="400" width="90%"></a>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/img2.jpg" class="img" height="400" width="90%">
          </div>
          <div class="carousel-item">
            <img src="img/img3.jpg" class="img" height="400" width="90%">
          </div>
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
          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 md-4 mt-3">
            <div class="card">
              <img src="img/none.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>

  <!-- sidebar -->
  <div class="sidebar col-lg-3 mt-5 ">
    <!-- iklan -->
    <div class="iklan ">
      <h4>Judul Iklan</h4>
      <img src="img/iklan.png" height="200rem" width="100%" alt="Iklan 1">
    </div>
    <!-- news  -->
    <div class="news mt-4 shadow-sm p-1 mb-5 bg-body rounded">
      <h3 class="text-center">Latest News</h3>
      <ul>
        <li>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/none.jpg" class="card-img " height="100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="card-title">Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/none.jpg" class="card-img " height="100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="card-title">Lorem ipsum dolor sit amet </p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/none.jpg" class="card-img " height="100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="card-title">Lorem ipsum dolor sit amet </p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/none.jpg" class="card-img" height="100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="card-title">Lorem ipsum dolor sit amet </p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/none.jpg" class="card-img " height="100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <p class="card-title">Lorem ipsum dolor sit amet </p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- iklan -->
    <div class="iklan ">
      <h4>Judul Iklan</h4>
      <img src="img/iklan.png" height="200rem" width="100%" alt="Iklan 1">
    </div>
  </div>


</div>

<div class="row">



  <!-- buku baru scroll -->
  <div class="buku col-lg-7 shadow-sm p-3 mb-5 bg-body rounded center">
    <h4>Buku Baru</h4>
    <hr>
    <div class="scroll">
      <div class="item" style="width: 15rem;">
        <a href="/detail_buku"><img src="img/2.jpg" class="card-img-top">
          <div class="card m-2">
            <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ut.</h6>
          </div>
        </a>
      </div>
      <div class="item" style="width: 15rem;">
        <img src="img/2.jpg" class="card-img-top">
        <div class="card m-2">
          <h6>Lorem ipsum dolor sit amet.</h6>
        </div>
      </div>
      <div class="item" style="width: 15rem;">
        <img src="img/2.jpg" class="card-img-top">
        <div class="card m-2">
          <h6>Lorem ipsum dolor sit amet.</h6>
        </div>
      </div>
      <div class="item" style="width: 15rem;">
        <img src="img/2.jpg" class="card-img-top">
        <div class="card m-2">
          <h6>Lorem ipsum dolor sit amet.</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 mt-5"></div>



</div>
@endsection