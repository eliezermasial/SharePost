<?php

namespace App\Http\Controllers\Article;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('isActive', 1)->get();

        return view('back.article.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validatedData = $request->validated();

        $user_id = auth::user()->id;


        $image = $request->file('image');

        if ($request->hasFile('image') && $image->isValid()) {
            
            $image = $request->file('image')->store('images', 'public');
        }
        
        Article::create([
            'image' => $image,
            'author_id' => $user_id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'isActive' => $validatedData['isActive'],
            'isComment' => $validatedData['isComment'],
            'isSharable' => $validatedData['isSharable'],
            'category_id' => $validatedData['category_id'],
        ]);

        return redirect()->route('article.index')->with('success', 'Article ajouté avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
