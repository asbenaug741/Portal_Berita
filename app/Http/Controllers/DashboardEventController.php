<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Http\Requests\eventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::all();
        return view('dashboard.event.index', compact(
            'events'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Event;
        return view('dashboard.event.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(eventRequest $request)
    {
        $model = new Event;
        $model->nama_event = $request->nama_event;
        $model->tanggal_event = $request->tanggal_event;
        $model->deskripsi = ($request->deskripsi);
        $model->gambar = $request->file('gambar')->store('event-gambar');
        $model->save();

        return redirect('dashboard/event')->with('success', 'Event Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        return view('dashboard.event.show',[
            'event'=>$event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Event::find($id);
        return view('dashboard.event.edit',compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(eventRequest $request, $id)
    {
        $model = Event::find($id);
        $model->nama_event = $request->nama_event;
        $model->tanggal_event = $request->tanggal_event;
        $model->deskripsi = ($request->deskripsi);
        if($request->file('gambar')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $model->gambar = $request->file('gambar')->store('event-gambar');
        }
        $model->save();

        return redirect('dashboard/event')->with('success', 'Event berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        if($event->gambar){
            Storage::delete($event->gambar);
        }
        Event::destroy($event->id);
        return redirect('dashboard/event')->with('success','event berhasil di hapus');
    }
}