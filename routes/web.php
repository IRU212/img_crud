<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// ホーム
Route::get('/', function () {
    return view('welcome');
});

//bookページ
Route::prefix('book')->group(function(){
    Route::get('/',[BookController::class,'index'])->name('book-home');
    Route::post('/store',[BookController::class,'store'])->name('book-store');
    Route::patch('/{item}',[BookController::class,'update'])->name('book-update');
    Route::get('/{item}/edit',[BookController::class,'edit'])->name('book-edit');
});

//post
Route::prefix('post')->group(function(){
    Route::get('/',[PostController::class,'index'])->name('book-home');
    Route::post('/store',[PostController::class,'store'])->name('book-store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
