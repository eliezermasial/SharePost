<?php

namespace App\Http\Controllers\MediaSocial;

use App\Models\MediaSocial;
use App\Http\Controllers\Controller;
use App\Http\Requests\MediaSocial\StoreMediaSocialRequest;
use App\Http\Requests\MediaSocial\UpdateMediaSocialRequest;

class MediaSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = MediaSocial::All();

        return view('back.Media.index', ['socials'=>$socials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaSocialRequest $request)
    {
        $request->validated();
        
        MediaSocial::create($request->All());

        return redirect()->route('mediaSocial.index')->with('success', 'reseau enregistré avec success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaSocial $mediaSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MediaSocial $mediaSocial)
    {
        return view('back.Media.create', ['mediaSocial' => $mediaSocial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaSocialRequest $request, MediaSocial $mediaSocial)
    {
        $request->validated();

        $mediaSocial->updated($request->all());
        
        return redirect()->route('mediaSocial.index')->with('success', 'reseau modifié avec success !') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MediaSocial $mediaSocial)
    {
        $mediaSocial->delete();

        return back()->with('success', 'reseau supprimé avec success !');
    }
}
