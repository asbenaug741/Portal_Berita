@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Books</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- Membuat postingan --}}

<a class="btn btn-primary" href="/dashboard/book/create" >+ Tambah</a>

<div class="table-responsive mt-5">
    <table class="table table-striped table-sm" width="600px">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Genre</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Sampul</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $key=>$value)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $value->judul_buku }}</td>
                <td>{{ $value->genre }}</td>
                <td>{{ $value->penulis }}</td>
                <td>{{ $value->penerbit }}</td>
                <td><img src="{{ asset('storage/'.$value->sampul) }}" width="50px"></td>
                <td>
                    <div class="s">
                        <a href="/detail_buku/{{ $value->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/book/{{ $value->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <form action="/dashboard/book/{{ $value->id }}" method="POST" class="d-inline">
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