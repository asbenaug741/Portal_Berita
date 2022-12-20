<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Requests\newsRequest;
use Illuminate\Support\Facades\Storage;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index', compact(
            'news'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new News;
        return view('dashboard.news.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(newsRequest $request)
    {
        $model = new News;
        $model->judul_berita = $request->judul_berita;
        $model->sampul = $request->file('sampul')->store('News-sampul');
        $model->isi_berita = ($request->isi_berita);
        $model->last_update = $request->last_update;
        $model->save();

        return redirect('dashboard/news');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = News::find($id);
        return view('dashboard.news.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(newsRequest $request, $id)
    {
        $model = News::find($id);
        $model->judul_berita = $request->judul_berita;
        if($request->file('sampul')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $model->sampul = $request->file('sampul')->store('News-sampul');
        }
        $model->isi_berita = ($request->isi_berita);
        $model->last_update = $request->last_update;
        $model->save();

        return redirect('dashboard/news')->with('success', 'News berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        if($news->sampul){
            Storage::delete($news->sampul);
        }
        News::destroy($news->id);
        return redirect('dashboard/book')->with('success','News berhasil dihapus');
    }
}
