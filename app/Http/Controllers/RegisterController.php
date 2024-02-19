<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
 

public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'username' => ['required', 'string', 'max:255','unique:users'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user = User::create([
            'name' => $request->name,
            'username'=>$request->username,
            'email' => $request->email,
            'category' =>$request->category,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        // Auth::login($user);

        return redirect('/inscription')->with('success', 'Register done successfully.');;
    }
}
