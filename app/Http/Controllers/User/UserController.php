<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = user::where('role', 'author')->get();
        return view('back.Author.index', ['authors'=> $authors]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validateData = $request->validated();

        User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => hash::make('123456789')
        ]);
        
        return redirect()->route('author.index')->with('success', 'autheur créé avec sucés !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $author)
    {
        return view('back.Author.create', ['author' => $author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $author)
    {
        $validateData = $request->validated();

        $author->updated([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
        ]);

        return redirect()->route('author.index')->with('success', 'autheur modifié avec sucés !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $author)
    {
        $author->delete();
        return back()->with('success', 'Autheur supprimé avec success !');
    }
}
