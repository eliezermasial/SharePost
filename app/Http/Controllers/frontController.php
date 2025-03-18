<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class frontController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function frontDisplayCategory (string $slug)
    {
        $category = Category::where('slug', $slug)->with('articles')->first();

        return view('home.font-category', ['category' => $category]);
    }
}
