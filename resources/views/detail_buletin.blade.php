@extends('layouts.main')

@section('container')

<div class="judul text-center m-4"><h1></h1></div>


<div class="row">
    <div class="col-2"></div>
    <div class=" col-4 sampul text-center">
        <img src="{{ asset('storage/'.$buletin->sampul) }}" style="max-width:500px" width="100%">
    </div>
    <div class="col-5 download nostrip">
        <div class="judul"><h1>{{ $buletin->judul }}</h1></div>
        <p class="text-muted">Edisi: {{ $buletin->edisi }}</p>
        <div class="down">
            <a href="{{ asset('storage/'.$buletin->file) }}" target="_blank"><button class="btn btn-danger"><i class="bi bi-eye"></i> Lihat</button></a>
        </div>
    </div>
</div>

@endsection