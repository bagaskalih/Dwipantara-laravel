<?php

use Illuminate\Support\Facades\Route;
use App\Models\comments;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('pulau/jawa', function () {
    return view('jawa');
});

Route::get('pulau/', function () {
    return redirect('pulau/jawa');
});

Route::get('/jogja', function () {
    return view('jogja');
});

Route::get('review/jogja', function () {
    return view('review-jogja', [
        "komentar" => comments::all()
    ]);
});