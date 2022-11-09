@extends('layouts.main')

@section('container')
<div class=" row">
    <div class="col-1"></div>
    <div class="content col-lg-7 mt-2 shadow-sm p-3 mb-5 bg-body rounded ">
        <!-- berita utama -->
        <a href="/detail_news"><img src="img/img.jpg" class="img-fluid mx-4 mt-1" width="93%" height="10rem"></a>

        <div class="newsmain mx-4 p-3">
            <p class="card-text"><small class="text-muted"> 3 mins ago</small></p>
            <h3 class="card-title">Lorem ipsum dolor sit amet consectetur.</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <hr class="mt-2">

            <!-- scroll bar -->
            <div class="newsnow mt-2 mb-5">
                <h3>Berita Utama Lainnya</h3>
                <div class="item" style="width: 18rem;">
                    <img src="img/none.jpg" class="card-img-top" alt="...">
                    <div class="card m-2">
                        <h6>Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
                <div class="item" style="width: 18rem;">
                    <img src="img/none.jpg" class="card-img-top" alt="...">
                    <div class="card m-2">
                        <h6>Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
                <div class="item" style="width: 18rem;">
                    <img src="img/none.jpg" class="card-img-top" alt="...">
                    <div class="card m-2">
                        <h6>Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>
                <div class="item" style="width: 18rem;">
                    <img src="img/none.jpg" class="card-img-top" alt="...">
                    <div class="card m-2">
                        <h6>Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                    </div>
                </div>

            </div>
        </div>


        <!-- content -->
        <div class="container mt-5">
            <div class="mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/none.jpg" class="img-fluid rounded" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/none.jpg" class="img-fluid rounded" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/none.jpg" class="img-fluid rounded" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/none.jpg" class="img-fluid rounded" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>


    <!-- sidebar -->
    <div class="sidebar col-lg-3 mt-5 ">
        <!-- iklan -->
        <div class="iklan">
            <h4>Judul Iklan</h4>
            <img src="img/iklan.png" height="200rem" width="100%" alt="Iklan 1">
        </div>
    </div>

</div>
<!-- end of content -->
@endsection