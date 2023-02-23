<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

//Praktikum 3 - Nomor 1
Route::get('/', function () {
    echo "Selamat Datang di Halaman Utama!!!";
});

//Praktikum 3 - Nomor 2
Route::prefix('/products')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return 'Ini Halaman Marbel-Edu-Games';
    });
    Route::get('marbel-and-friends-kids-games', function(){
        return 'Ini Halaman marbel-and-friends-kids-games';
    });
    Route::get('/riri-story-books', function(){
        return 'Ini Halaman riri-story-books';
    });
    Route::get('/kolak-kids-songs', function(){
        return 'Ini Halaman Kolak-kids-songs';
    });
});

//Praktikum 3 - Nomor 3
route::get('/news/{title?', function ($title=null){
    return $title;
});

//Praktikum 3 - Nomor 4
Route::prefix('/program')->group(function(){
    Route::get('/karir', function(){
        return 'Ini Halaman Karir';
    });
    Route::get('/magang', function(){
        return 'Ini Halaman Magang';
    });
    Route::get('/kunjungan-industri', function(){
        return 'Ini Halaman Kunjungan Industri';
    });
});

//Praktikum 3 - Nomor 5
Route::get('/Gt', function(){
    echo "Selamat Datang di Halaman About Us";
});

//Praktikum 3 - Nomor 6
Route::resource('/contact-us', ContactController::class)->only('index');