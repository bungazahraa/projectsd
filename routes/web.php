<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/struktur', function () {
    return view('sk');
});
Route::get('/visimisi', function () {
    return view('vm');
});
Route::get('/ekstra', function () {
    return view('ek');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/news', function () {
    return view('news.index');
})->middleware('auth')->name('news');

Route::get('/', [NewsController::class, 'index']);
Route::resource('news', NewsController::class);