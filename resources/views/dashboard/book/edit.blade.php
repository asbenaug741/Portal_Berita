@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Book</h1>
</div>

<form action="/dashboard/book/{{ $model->id }}" method="POST" class="col-lg-8" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="judul_buku" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" value="{{ $model->judul_buku }}" autocomplete="off">
    </div>
    <table width="500px">
        <tr><td>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Ilmu Pengetahuan">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Ilmu Pengetahuan
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Fiksi">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Fiksi
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Non Fiksi">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Non Fiksi
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Agama">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Agama
        </label>
        @error('jenis_buku')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </td>
    <td>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Filsafat">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Filsafat
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Bahasa">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Bahasa
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Ilmu Sosial">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Ilmu Sosial
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Kesenian">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Kesenian
        </label>
        @error('jenis_buku')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </td>
    <td>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Geografi dan Sejarah Umum">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Geografi dan Sejarah Umum
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Pendidikan">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Pendidikan
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Adat Istiadat">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Adat Istiadat
        </label><br>
        <input class="form-check-input" type="radio" name="jenis_buku" id="jenis_buku" value="Ilmu Politk">
        <label class="form-check-label" for="Ilmu Pengetahuan">
          Ilmu Politik
        </label>
        @error('jenis_buku')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </td>
</tr>
</table>
    <div class="mb-3">
        <label for="penulis" class="form-label">penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" value="{{ $model->penulis }}" autocomplete="off">
        @error('penulis')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jenis_buku" class="form-label">Jenis Buku</label>
        <input type="text" class="form-control" id="jenis_buku" name="jenis_buku" value="{{ $model->jenis_buku }}">
        @error('jenis_buku')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="kota_terbit" class="form-label">kota_terbit</label>
        <input type="text" class="form-control" id="kota_terbit" name="kota_terbit" placeholder="Kota Terbit" value="{{ $model->kota_terbit }}" autocomplete="off">
        @error('kota_terbit')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" value="{{ $model->penerbit }}" autocomplete="off">
        @error('penerbit')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit" value="{{ $model->tahun_terbit }}" autocomplete="off">
        @error('tahun_terbit')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sampul" class="form-label">sampul</label>
        <input type="hidden" name="oldGambar" value{{ $model->sampul }}>
        <input type="file" class="form-control" id="sampul" name="sampul">
        @error('sampul')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sinopsis" class="form-label">Sinopsis</label>
        <input id="sinopsis" type="hidden" name="sinopsis" value="{{ $model->sinopsis }}">
        <trix-editor input="sinopsis"></trix-editor>
        @error('sinopsis') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="tetang_penulis" class="form-label">Tentang Penulis</label>
        <input id="tentang_penulis" type="hidden" name="tentang_penulis" value="{{ $model->tentang_penulis }}">
        <trix-editor input="tentang_penulis"></trix-editor>
        @error('tentang_penulis') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="foto_penulis" class="form-label">Foto Penulis</label>
        <input type="hidden" name="oldGambar" value="{{ $model->foto_penulis }}">
        <input type="file" class="form-control" id="foto_penulis" name="foto_penulis">
        @error('foto_penulis')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

@endsection