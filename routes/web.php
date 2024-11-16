<?php

use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Membuat Routing / jalur
// Route::get('siswa', function(){
//     return view('adam');
// });

// Jika Mau nambahin Halaman Teman (contoh : dani)

// Route::get('dani', function(){

//     return "Gw Ganteng";
// });


Route::resource('santri', SantriController::class );

