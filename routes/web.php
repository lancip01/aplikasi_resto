<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

//* |---------------------------------------| Route Auth |---------------------------------------| //



//* |---------------------------------------| Route Dashboard |---------------------------------------| //
Route::get('/manager', function () {
    return view('dashboard.dashboardmanager');
});


//* |---------------------------------------| Route Kategori |---------------------------------------| //
Route::get('/kategori', [CategoryController::class, 'index'])->name("kategori");
Route::post('/kategori', [CategoryController::class, 'store']);
Route::get('/kategori/{id}', [CategoryController::class, 'destroy']);


//* |---------------------------------------| Route Menu |---------------------------------------| //
Route::get('/menu', [MenuController::class, 'index'])->name("menu");
Route::post('/menu', [MenuController::class, 'store']);
Route::get('/menu{id}', [MenuController::class, 'destroy']);