@extends('dashboard.layout.main')

@section('container')

<!-- content -->
<div class="close row mt-5">
    <div class="gambar col-3 me-5 "><img src="{{ asset('storage/'.$book->sampul) }}"></div>
    <div class="content col-3 shadow-sm p-3 mb-5 ms-5 bg-body rounded">
        <div class="rincian">
            <h2>{{ $book->judul_buku }}</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Penulis</td>
                        <td width="60%">{{ $book->penulis }}</td>
                    </tr>
                    <tr>
                        <td>kategori buku</td>
                        <td>{{ $book->jenis_buku }}</td>
                    </tr>
                    <tr>
                        <td>kota terbit</td>
                        <td>{{ $book->kota_terbit }}</td>
                    </tr>
                    <tr>
                        <td>penerbit</td>
                        <td>{{ $book->penerbit }}</td>
                    </tr>
                    <tr>
                        <td>tahun terbit</td>
                        <td>{{ $book->tahun_terbit }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container row mt-3">

    <div class="col-lg-8 content shadow-sm p-5 mb-5 bg-body rounded center">
        <h2 class="text-center m-2 pb-2"><b>Sinopsis Lengkap</b></h2>
        <article>{{ $book->sinopsis }}</article>
    </div>

</div>
<div class="container row">

    <div class="col-lg-8 content shadow-sm p-5 bg-body rounded center">
        <h2 class="text-center mb-5 pb-2"><b>Tentang Penulis</b></h2>
        <div class="row">
            <div class="col-lg-3">
                <img src="img/tzuyu.jpg" class="author img-fluid" alt="chou tzuyu">
            </div>
            <p class="col-lg-8">
                {{ $book->tentang_penulis }}
            </p>
        </div>
    </div>

</div>
<!-- end of content -->
@endsection