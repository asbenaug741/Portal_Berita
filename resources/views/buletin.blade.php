@extends('layouts.main')

@section('container')
<!-- content -->
<div class=" pt-4 buletin-list row">
  @foreach($buletin as $key)
  <div class="col-2 nostrip">
    <a href="detail_buletin/{{ $key->id }}">
    <div class="content card rounded shadow-md"style="max-height:400px">
      <img src="{{ asset('storage/'.$key->sampul) }}" class=" img-thumbnail shadow mb-2 bg-body rounded">
      <h5 class="card-title text-center " style="font-size:18px;">{{ $key->judul }}</h5>
      <p class="card-text p-2"><small class="text-muted"> Edisi: {{ $key->edisi }}</small></p>
    </div>
    </a>
  </div>
  @endforeach
</div>
<!-- end of content -->
@endsection