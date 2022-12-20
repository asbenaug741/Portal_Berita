<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use App\Http\Requests\bookRequest;
use Illuminate\Support\Facades\Storage;


class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Book::all();
        return view('dashboard.book.index', compact(
            'books'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Book;
        return view('dashboard.book.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bookRequest $request)
    {
        // dd($request);
        $model = new Book;
        $model->judul_buku = $request->judul_buku;
        // $model->genre = $request->genre;
        $model->penulis = $request->penulis;
        $model->jenis_buku = $request->jenis_buku;
        $model->kota_terbit = $request->kota_terbit;
        $model->penerbit = $request->penerbit;
        $model->tahun_terbit = $request->tahun_terbit;
        $model->sampul = $request->file('sampul')->store('books-sampul');
        $model->sinopsis = ($request->sinopsis);
        $model->tentang_penulis = ($request->tentang_penulis);
        $model->foto_penulis = $request->file('foto_penulis')->store('books-penulis');
        $model->save();

        return redirect('dashboard/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('dashboard.book.show',[
            'book'=>$book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Book::find($id);
        return view('dashboard.book.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(bookRequest $request, $id)
    {
        $model = Book::find($id);
        $model->judul_buku = $request->judul_buku;
        $model->penulis = $request->penulis;
        $model->jenis_buku = $request->jenis_buku;
        $model->kota_terbit = $request->kota_terbit;
        $model->penerbit = $request->penerbit;
        $model->tahun_terbit = $request->tahun_terbit;
        if($request->file('sampul')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $model->sampul = $request->file('sampul')->store('books-sampul');
        }
        if($request->file('foto_penulis')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $model->foto_penulis = $request->file('foto_penulis')->store('books-penulis');
        }
        $model->sinopsis = ($request->sinopsis);
        $model->tentang_penulis = ($request->tentang_penulis);
        $model->save();

        return redirect('dashboard/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        if($book->sampul){
            Storage::delete($book->sampul);
        }
        if($book->foto_penulis){
            Storage::delete($book->foto_penulis);
        }
        Book::destroy($book->id);
        return redirect('dashboard/book')->with('success','event has been deleted');
    }
}
