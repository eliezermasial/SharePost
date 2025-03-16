<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashbord () {
        $user = Auth::user();
        $articles_author = null;
        
        if($user->role == 'author') {

            $articles_author = Article::where('author_id', $user->id)->count();
        }

        $articles = Article::count();
        $recent_articles = Article::orderBy('created_at', 'Desc')->get();
        $categories = Category::all();
        $comments = Comment::count();

        return view('back.Dashboard',[
            'articles' => $articles,
            'comments' => $comments,
            'categories'=> $categories,
            'articles_author'=> $articles_author,
            'recent_articles'=> $recent_articles
        ]);
    }
}
