<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardEventController;

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
        "title" => "home"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        "title" => "news"
    ]);
});

Route::get('/buletin', function () {
    return view('buletin', [
        "title" => "buletin"
    ]);
});

Route::get('/detail_buku', function () {
    return view('detail_buku', [
        "title" => "buku"
    ]);
});

Route::get('/detail_event', function () {
    return view('detail_event', [
        "title" => "event"
    ]);
});

Route::get('/detail_news', function () {
    return view('detail_news', [
        "title" => "news"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

/* route dashboard */
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/event', DashboardEventController::class)->middleware('auth');
