<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** 
 * HTTP Method:
 * 1. Get: Untuk Menampilkan
 * 2. Post: Untuk Mengirim Data
 * 3. Put: Untuk Meng-update Data
 * 4. Delete: Untuk MEnghapus Data
*/

// Route Untuk Menampilkan Teks Salam
Route::get('/salam', function(){
    return "Assalamualaikum...";
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);