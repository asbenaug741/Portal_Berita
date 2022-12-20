@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Event</h1>
</div>

<form action="/dashboard/event/{{ $model->id }}" method="POST" class="col-lg-8" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="nama_event" class="form-label">Nama Event</label>
        <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder="Nama Event" value="{{$model->nama_event}}" autocomplete="off">
        @error('nama_event')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tanggal_event" class="form-label">Tanggal Event</label>
        <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" value="{{ $model->tanggal_event }}">
    </div>
    <div class="mb-3">
        <input id="deskripsi" type="hidden" name="deskripsi" value="{{ $model->deskripsi }}">
        <trix-editor input="deskripsi"></trix-editor>
        @error('deskripsi') <span class="text-red-500">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="hidden" name="oldGambar" value="{{ $model->gambar }}">
        <input type="file" class="form-control" id="gambar" name="gambar">
        @error('gambar')
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