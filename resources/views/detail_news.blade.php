@extends('layouts.main')

@section('container')
<!-- content -->
<div class="row">
    <div class="col-lg-2"></div>

    <div class="content col-lg-8 mt-2 shadow-sm p-3 mb-5 bg-body rounded">
        <!-- berita utama -->
        
        <img src="{{ asset('storage/'.$news->sampul) }}" class="berita img-fluid mx-4 mt-1" width="93%" height="10rem">

        <section class="newsutama mx-4 p-3">
            <hr>
            <h3 class="judulberita card-title"><b>{{ $news->judul_berita }}</b></h3>
            <hr>
            <p class="card-text">{!!$news->isi_berita!!}</p>
            <div class="garis mt-5 mb-5"></div>
        </section>
    </div>
    <div class="col-lg-2"></div>
</div>
<!-- end of content -->
@endsection