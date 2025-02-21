<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\MediaSocial\MediaSocialController;

//routes de la page d'accueil
Route::get('/', function () {
    return view('auth.login');
});

//routes de dashboard
Route::get('/dashboard', function () {
    return view('back.Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//routes de profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//routes de resources de categories
Route::resource('/category', CategoryController::class)->middleware('auth');

//routes de resources d'article
Route::resource('/article', ArticleController::class)->middleware('auth');

//routes de resources des Autheurs
Route::resource('/author', UserController::class)->middleware('auth');

//routes de resources des medias sociaux
Route::resource('/mediaSocial', MediaSocialController::class)->middleware('auth');

require __DIR__.'/auth.php';
