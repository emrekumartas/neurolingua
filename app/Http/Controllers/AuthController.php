<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Inertia\Inertia;
use Inertia\Response;

class AuthController extends Controller
{

    public function showLogin(): Response
    {
        return Inertia::render('Auth/Login', [
            'status' => session('status'),
        ]);
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return Inertia::location('/');
        }

        return response()->json([
            'message' => 'The provided credentials do not match our records.',
        ], 401);
    }


    public function showRegister(): Response
    {
        return Inertia::render('Auth/Register', [
            'status' => session('status'),
        ]);
    }


    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/');
    }


    public function logout(): RedirectResponse
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
