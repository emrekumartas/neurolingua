<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Auth/Login', [
            'status' => session('status'),
        ]);
    }

    public function register()
    {
        return Inertia::render('Auth/Register', [
            'status' => session('status'),
        ]);
    }
}
