<?php

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Seting\SetingsController;
use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\MediaSocial\MediaSocialController;

//routes de la page d'accueil
Route::get('/', function () {
    return view('home.home');
});

//routes de dashboard
Route::get('/dashboard', function () {

    $user = Auth::user();
    $articles_author = null;
    
    if($user->role == 'author') {

        $articles_author = Article::where('author_id', $user->id)->count();
    }

    $articles = Article::count();
    $recent_articles = Article::orderBy('created_at', 'Desc')->get();
    $categories = Category::all();

    return view('back.Dashboard',[
        'articles' => $articles,
        'categories'=> $categories,
        'articles_author'=> $articles_author,
        'recent_articles'=> $recent_articles
    ]);
    
})->middleware(['auth', 'verified', 'checkRole',])->name('dashboard');

/*
Route::get('/recent_article', function () {
    $recent_articles = Article::orderBy('created_at', 'Desc')->get();
})*/

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

require __DIR__.'/auth.php';
