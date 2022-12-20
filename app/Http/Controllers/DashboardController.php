<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Book;
use App\Models\Buletin;
use App\Models\News;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'event' => Event::all(),
            'book' => Book::all(),
            'buletin' => Buletin::all(),
            'news' => News::all()
        ]);
    }
}
