<?php

namespace App\Http\Controllers;

use App\Models\buletin;
use Illuminate\Http\Request;
use App\Http\Requests\buletinRequest;
use Illuminate\Support\Facades\Storage;

class DashboardBuletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bulletins= Buletin::all();
        return view('dashboard.buletin.index', compact(
            'bulletins'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Buletin;
        return view('dashboard.buletin.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(buletinRequest $request)
    {
        $model = new Buletin;
        $model->judul = $request->judul;
        $model->edisi = $request->edisi;
        $model->tanggal_terbit = $request->tanggal_terbit;
        $model->sampul = $request->file('sampul')->store('buletin-sampul');
        $model->file = $request->file('file')->store('buletin-file');
        $model->save();

        return redirect('dashboard/buletin')->with('success', 'Buletin berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function show(buletin $buletin)
    {
        return view('dashboard.buletin.show',[
            'buletin'=> $buletin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Buletin::find($id);
        return view('dashboard.buletin.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function update(buletinRequest $request, $id)
    {
        $model = Buletin::find($id);
        $model->judul = $request->judul;
        $model->edisi = $request->edisi;
        $model->tanggal_terbit = $request->tanggal_terbit;
        if($request->file('sampul')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $model->sampul = $request->file('sampul')->store('buletin-sampul');
        }
        $model->file = $request->file('file')->store('buletin-file');
        $model->save();

        return redirect('dashboard/buletin')->with('success', 'Buletin berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buletin  $buletin
     * @return \Illuminate\Http\Response
     */
    public function destroy(buletin $buletin)
    {
        if($buletin->sampul){
            Storage::delete($buletin->sampul);
        }
        if($buletin->file){
            Storage::delete($buletin->file);
        }
        Buletin::destroy($buletin->id);
        return redirect('dashboard/buletin')->with('success','Buletin berhasil dihapus');
    }
}
