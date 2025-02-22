<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $articles = Article::all();
        } else {
            $articles = Article::ByAuthor()->get();
        }

        return view('back.article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->get();
        
        return view('back.article.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validatedData = $request->validated();

        $user_id = auth::user()->id;

        $image = null;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $image = $request->file('image')->store('images', 'public');
        }

        $tags = isset($validatedData['tags']) ? explode(',', $validatedData['tags']) : [];

        $article = Article::create([
            'image' => $image,
            'author_id' => $user_id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'isActive' => $validatedData['isActive'],
            'isComment' => $validatedData['isComment'],
            'isSharable' => $validatedData['isSharable'],
            'category_id' => $validatedData['category_id'],
        ]);

        $article->tag($tags);

        return redirect()->route('article.index')
                ->with('success', 'Article ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        View::share('article', $article);
        return view('back.article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::active()->get();

        return view('back.article.create', ['article' => $article,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validatedData = $request->validated();

        $image = $article->image;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Supprimer l'ancienne image si une nouvelle est ajoutée
            if (!empty($article->image)) {
                Storage::disk('public')->delete($article->image);
            }
            $image = $request->file('image')->store('images', 'public');
        }

        $tags = isset($validatedData['tags']) ? explode(',', $validatedData['tags']) : [];

        $article->update([
            'image' => $image,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'isActive' => $validatedData['isActive'],
            'isComment' => $validatedData['isComment'],
            'isSharable' => $validatedData['isSharable'],
            'category_id' => $validatedData['category_id'],
        ]);

        $article->retag($tags);

        return redirect()->route('article.index')->with('success', 'Article ajour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article supprimé avec succès');
    }
}
