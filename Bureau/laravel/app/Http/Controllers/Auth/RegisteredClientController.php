<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredClientController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.client');
    }
   

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:8'],
            'pays' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()], 
        ]);

       $client = client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'pays' => $request->pays,
            'ville' => $request->ville,
            'contact' => $request->contact,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);
        

        event(new Registere($client));

        Auth::login($client);
       
        return redirect(RouteServiceProvider::HOME);
        

    }
    
}
