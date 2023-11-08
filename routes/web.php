<?php

use App\Services\Newsletter;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);
Route::get('/info', [InfoController::class, 'index']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin Section
Route::prefix('admin')->middleware('admin')->group(function() {
    Route::post('posts', [AdminPostController::class, 'store']);
    Route::get('posts/create', [AdminPostController::class, 'create']);
    Route::get('posts', [AdminPostController::class, 'index']);
    Route::get('posts/{post:id}/edit', [AdminPostController::class, 'edit']);
    Route::patch('posts/{post:id}', [AdminPostController::class, 'update']);
    Route::delete('posts/{post:id}', [AdminPostController::class, 'destroy']);
});