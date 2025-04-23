<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\StoreContactRequest;

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

    /**
     * Display a listing of the resource.
     */
    public function showForm ()
    {
        return view('home.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitForm (StoreContactRequest $request) 
    {
        $validated = $request->validated();
        
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'suject' => $validated['suject'],
            'message' => $validated['message'],
            'is_active' => 1,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully');
    }


    public function search (Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ]);
    
        $articles = Article::where('title', 'like' ,'%' . $request->search . '%')
            ->orWhere('content', 'like', '%' . $request->search . '%')->get();
            
        return view('home.search',['articles'=> $articles] );
    }
}
