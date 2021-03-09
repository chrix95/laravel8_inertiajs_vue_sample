<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
