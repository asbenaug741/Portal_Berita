@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Event</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- Membuat postingan --}}
<a class="btn btn-primary" href="/dashboard/event/create" >+ Tambah</a>

<div class="table-responsive mt-5">
    <table class="table table-striped" width="600px">
        <thead>
            <tr>
                {{-- <th scope="col">No</th> --}}
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $key=>$value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->nama_event }}</td>
                <td>{{ $value->tanggal_event }}</td>
                <td><img src="{{ asset('storage/'.$value->gambar) }}" width="50px"></td>
                <td>
                    <div class="s">
                        <a href="/detail_event/{{ $value->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/event/{{ $value->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <form action="/dashboard/event/{{ $value->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection