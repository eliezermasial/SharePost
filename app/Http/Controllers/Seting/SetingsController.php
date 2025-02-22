<?php

namespace App\Http\Controllers\Seting;

use App\Models\Setings;
use App\Http\Controllers\Controller;
use App\Http\Requests\Seting\StoreSetingsRequest;
use App\Http\Requests\Seting\UpdateSetingsRequest;

class SetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setings = Setings::all();
        return view('back.Seting.index', ['web_sites'=>$setings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.Seting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSetingsRequest $request)
    {
        $validatedData = $request->validated();

        $logo = null;

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {

            $logo = $request->file('logo')->store('images', 'public');
        }

        Setings::create([

            'logo' => $logo,
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'about' => $validatedData['about'],
            'address' => $validatedData['address'],
            'web_site_name' => $validatedData['web_site_name'],
        ]);

        return redirect()->route('seting.index')->with('success', 'site enregistré avec success !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setings $setings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setings $seting)
    {
        return view('back.Seting.create', ['seting'=>$seting]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSetingsRequest $request, Setings $seting)
    {
        $validatedData = $request->validated();

        $logo = null;

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {

            $logo = $request->file('logo')->store('images', 'public');
        }

        $seting->update([

            'logo' => $logo,
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'about' => $validatedData['about'],
            'address' => $validatedData['address'],
            'web_site_name' => $validatedData['web_site_name'],
        ]);

        return redirect()->route('seting.index')->with('success', 'site modifié avec success !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setings $seting)
    {
        $seting->delete();

        return back()->with('success', 'site supprimé avec success !');
    }
}
