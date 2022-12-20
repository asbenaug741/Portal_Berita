@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah News</h1>
</div>

<form action="/dashboard/news" method="POST" class="col-lg-8" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="judul_berita" class="form-label">Judul Berita</label>
        <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita" value="{{ old('judul_berita') }}" autocomplete="off">
        @error('judul_berita')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sampul" class="form-label">Sampul</label>
        <input type="file" class="form-control" id="sampul" name="sampul">
        @error('sampul')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="isi_berita" class="form-label">Isi Berita</label>
        <input id="isi_berita" type="hidden" name="isi_berita" value="{{ old('isi_berita') }}">
        <trix-editor input="isi_berita"></trix-editor>
        @error('isi_berita') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="last_update" class="form-label">last Update</label>
        <input type="datetime-local" class="form-control" id="last_update" name="last_update" value="{{ old('last_update') }}">
        @error('last_update')
            <p class="text-danger">{{$message}}</p>
        @enderror
    
    <div class="mb-3 mt-5">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection