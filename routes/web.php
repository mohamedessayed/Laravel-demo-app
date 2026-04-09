<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/',function () {
   return "Welcome to Laravel App"; 
});

Route::get('/posts',[PostController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'show'])->where('id','[0-9]+');

Route::resource('products',ProductController::class);
