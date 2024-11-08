<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PostController::class, 'index']);
Route::get('/category/{category}', [PostController::class, 'showCategory'])->name('category.show');
Route::get('/detail/{id}', [PostController::class, 'show'])->name('detail.show');
Route::get('/writers', [PostController::class, 'showWriters'])->name('writers.index'); 
Route::get('/writer/{author}', [PostController::class, 'showByWriter'])->name('writer.show'); 
Route::get('/about', function () {
    return view('about');
})->name('about');
