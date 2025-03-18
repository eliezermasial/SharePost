<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('back.Category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create([
            
            'name'=>$validatedData['name'],
            'description'=>$validatedData['description'],
            'isActive'=>$validatedData['isActive']
        ]);

        return redirect()->route('dashboard')
                ->with('success', 'Catégorie ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function fontDisplayCategory (string $slug)
    {
        $category = Category::where('slug', $slug)->with('articles')->first();

        return view('home.font-category', ['category' => $category]);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('back.Category.create', ['categorie' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $validatedData = $request->validated();
        
        $category->update([
            'name'=>$validatedData['name'],
            'description'=>$validatedData['description'],
            'isActive'=>$validatedData['isActive']
        ]);
        
        return redirect()->route('dashboard')
                ->with('success', 'Catégorie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('dashboard')
                ->with('success', 'Catégorie supprimée avec succès')
                ->with('error', 'Une erreur est survenue !');
    }
}
