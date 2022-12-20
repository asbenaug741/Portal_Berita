@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Buletin</h1>
</div>

<form action="/dashboard/buletin/{{ $model->id }}" method="POST" class="col-lg-8" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{ $model->judul }}" autocomplete="off">
        @error('judul')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="edisi" class="form-label">edisi</label>
        <input type="text" class="form-control" id="edisi" name="edisi" placeholder="Edisi" value="{{ $model->edisi }}" autocomplete="off">
        @error('edisi')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
        <input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" value="{{ $model->tanggal_terbit }}">
        @error('tanggal_terbit')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sampul" class="form-label">Sampul</label>
        <input type="hidden" name="oldGambar" value="{{ $model->sampul }}">
        <input type="file" class="form-control" id="sampul" name="sampul">
        @error('sampul')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File</label>
        <input type="hidden" name="oldGambar" value="{{ $model->file }}">
        <input type="file" class="form-control" id="file" name="file">
        @error('file')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

@endsection