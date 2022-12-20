@extends('layouts.main')

@section('container')
<div class=" row">
    <div class="col-1"></div>
    <div class="content col-lg-7 mt-2 shadow-sm p-3 mb-5 bg-body rounded ">
        <!-- berita utama -->
        @foreach($news as $key)
        
        @if($loop->first)
        <div class="nostrip">
            <a href="detail_news/{{ $key->id }}"><img src="{{ asset('storage/'.$key->sampul) }}" class="img-fluid mx-4 mt-1 overflow" width="93%" height="300px">

            <div class="newsmain mx-4 p-3">
                <h3 class="card-title">{{ $key->judul_berita }}</h3>
                <hr class="mt-2">
            </div>
            </a>
        </div>
        
        @else
        <!-- content -->
        <div class="container mt-5">
            <div class="mb-3 nostrip" style="max-width: 100%;">
                <a href="detail_news/{{ $key->id }}">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$key->sampul) }}" class="img-fluid rounded" height="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $key->judul_berita }}</h5>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <hr>
        </div>
            @endif
            @endforeach
        
    </div>


    <!-- sidebar -->
    <div class="sidebar col-lg-3 mt-5 ">
        <!-- iklan -->
        <div class="iklan mb-2">
            <img src="img/images.png" height="200rem" width="100%" alt="Iklan 1">
        </div>
        <div class="iklan">
            <img src="img/images.jpeg" height="200rem" width="100%" alt="Iklan 1">
        </div>
    </div>

</div>
@endsection
<!-- end of content -->