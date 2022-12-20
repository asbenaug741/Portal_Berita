<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardEventController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\DashboardBuletinController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BuletinController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\NewsController;

use App\Models\Event;
use App\Models\Buletin;
use App\Models\Book;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('homepage', [
        "title" => "home",
        "event" => Event::all(),
        "buletin" => Buletin::all(),
        "book" => Book::all(),
        "news" => News::all()
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "news",
        "news" => News::latest()->get(),
        
    ]);
});

Route::get('/buletin', function () {
    return view('buletin', [
        "title" => "buletin",
        "buletin" => Buletin::all()
    ]);
});

Route::get('/detail_buku', function () {
    return view('detail_buku', [
        "title" => "buku",
        "book" => Book::all()
    ]);
});

Route::get('/detail_event', function () {
    return view('detail_event', [
        "title" => "event",
        "event" => Event::all()
    ]);
});

Route::get('/detail_news', function () {
    return view('detail_news', [
        "title" => "news",
        "news" => News::all()
    ]);
});
Route::get('/detail_buletin', function () {
    return view('detail_buletin', [
        "title" => "buletin",
        "buletin" => Buletin::all()
    ]);
});

/* Route Frontend */
Route::get('detail_event/{id}', [EventController::class, 'detail']);
Route::get('detail_buku/{id}', [BookController::class, 'detail']);
Route::get('detail_buletin/{id}', [BuletinController::class, 'detail']);
Route::get('detail_news/{id}', [NewsController::class, 'detail']);

/* route Login */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

/* route dashboard */
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/event', DashboardEventController::class)->middleware('auth');
Route::resource('/dashboard/book', DashboardBookController::class)->middleware('auth');
Route::resource('/dashboard/buletin', DashboardBuletinController::class)->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');
