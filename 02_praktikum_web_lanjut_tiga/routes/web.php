<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return "Selamat Datang Di Halaman Awal Website";
});

Route::prefix('/products')->group(function () {
    Route::get('/users', function () {
        '<a href=https://www.educastudio.com/category/marbel-edu-games></a>';
        '<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
        '<a href=https://www.educastudio.com/category/riri-story-books</a>';
        '<a href=https://www.educastudio.com/category/kolak-kids-songs</a>';
    });
});
        
Route::get('/news', function () {
     '<a href=https://www.educastudio.com/news</a>';
     '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19</a>';
});

Route::prefix('/program')->group(function () {
    Route::get('/users', function () {
        '<a href=https://www.educastudio.com/program/karir</a>';
        '<a href= https://www.educastudio.com/program/magang</a>';
        '<a href=https://www.educastudio.com/program/kunjungan-industri</a>';
    });
});

Route::get('/about', function () {
    '<a href=https://www.educastudio.com/about-us</a>';
});