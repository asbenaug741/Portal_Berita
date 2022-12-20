@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buletin</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

{{-- Membuat postingan --}}

<a class="btn btn-primary" href="/dashboard/buletin/create" >+ Tambah</a>

<div class="table-responsive mt-5">
    <table class="table table-striped table-lg">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Edisi</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Sampul</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bulletins as $key=>$value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $value->judul }}</td>
                <td>{{ $value->edisi }}</td>
                <td>{{ $value->tanggal_terbit }}</td>
                <td><img src="{{ asset('storage/'.$value->sampul) }}" width="50px"></td>
                <td>
                    <div class="s">
                        <a href="/detail_buletin/{{ $value->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/buletin/{{ $value->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                        <form action="/dashboard/buletin/{{ $value->id }}" method="POST" class="d-inline">
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