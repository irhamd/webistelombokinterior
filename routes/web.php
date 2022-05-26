<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\posting\PostingController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\posting\PostingController;


// 
Route::group(['middleware' => ['cekmaintenance']], function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/posting', [PostingController::class, 'riwayatPosting']);
    Route::get('/single', [PostingController::class, 'single']);
    Route::get('/profil', [PostingController::class, 'profil']);

});

Route::group(['middleware' => ['auth']], function () {
    // Route::group(['prefix' => 'admin'], function () {
    Route::get('/buat_berita', [AdminController::class, 'buat_berita']);
    Route::post('/create-new-posting', [PostingController::class, 'createPosting']);
    Route::get('/data_posting', [PostingController::class, 'dataPosting']);
    // });
});

Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name("login");
    Route::post('/auth-sign-in', [AuthController::class, 'signIn']);
});
