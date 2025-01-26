<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        //verifie si l'image a été telechargéé dans la requete HTTp
        if($request->hasFile('image')) {

            //verifie si le fichier de l'image existe dans le dossier
            if(file::exists(public_path('black_auth/assets/profile').$request->user()->image) && !empty($request->user()->image))
            {
                //supprime l'image actuelle
                unlink(public_path('black_auth/assets/profile').$request->user()->image);
            }
        }

        $ext = $request->file('image')->getClientOriginalExtension(); //recupere l'extension de l'image ex: jpn pnj..
        $file_name = date('ymdHis').'.'.$ext; // renome l'image selon la date d'enregistrement
        
        $destinationPath = public_path('back_auth' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'profile'); //construit un chemin absolu vers un répertoire spécifique dans le dossier public
        $request->file('image')->move($destinationPath, $file_name); //deplace l'image dans le dossier absolu

        $request->user()->image = $file_name;
        $request->user()->name = $request->name;
        $request->user()->email = $request->email;

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
