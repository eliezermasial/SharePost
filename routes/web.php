<?php

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Seting\SetingsController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\MediaSocial\MediaSocialController; 

//routes de la page d'accueil
Route::get('/', function () {
    
    $articles = Article::where('isActive', 1)->orderBy('created_at', 'Desc')->limit(10)->get();
    $categories = Category::orderBy('created_at', 'Desc')->where('isActive', 1)->limit(10)->with('articles')->get();
    
    return view('home.home', ['articles' => $articles, 'categories' => $categories]);
    
})->name('home');

//routes de la page de detail
Route::get('/article/{slug}', [DetailController::class, 'index'])->name('detail');

//route de la page de comment
Route::post('/article/{id}/comment', [DetailController::class, 'comment'])->name('comment');

//routes de dashboard
Route::get('/dashboard',[DashboardController::class, 'dashbord'] )->name('dashboard')->middleware(['auth', 'verified', 'checkRole',]);

//routes de profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//routes de resources de categories
Route::resource('/category', CategoryController::class)->middleware('admin');

//routes de resources d'article
Route::resource('/article', ArticleController::class)->middleware('auth');

//routes de resources des Autheurs
Route::resource('/author', UserController::class)->middleware('admin');

//routes de resources des medias sociaux
Route::resource('/mediaSocial', MediaSocialController::class)->middleware('admin');

//routes de resources des paramettres
Route::resource('/seting', SetingsController::class)->middleware('admin');

//routes de resources des commentaires
Route::resource('/comment', CommentController::class);

//Route::post('/comment/{id}', CommentController::class, 'update');

require __DIR__.'/auth.php';
