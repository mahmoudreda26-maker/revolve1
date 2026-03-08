<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;
use App\Models\Post;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
return view('Home');
});

Route::resource('categories', CategoryController::class);
Route::get('/', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/category/{slug}', [CategoryController::class, 'show']);
Route::get('/search', [PostController::class, 'search']);
