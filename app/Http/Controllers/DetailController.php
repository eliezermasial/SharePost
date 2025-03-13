<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\Comment\StoreCommentRequest;

class DetailController extends Controller
{
    public function index(string $slug)
    {
        $article = Article::where('slug', $slug)->first();

        $newViews = $article->views + 1;
        $article->views = $newViews;
        $article->update();
    
        return view('home.detail', ['article' => $article]);
    }

    public function comment (StoreCommentRequest $request, int $id)
    {
        $validated = $request->validated();

        $article = Article::where('id', $id)->first();
    
        $article = comment::create([
            'article_id' => $id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'web_site' => $validated['web_site'],
            'is_active' => true,
        ]);
    
        return redirect()->back()->with('success', 'Comment added successfully');

    }
}
