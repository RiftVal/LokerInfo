<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout(Request $request)
    {
        // Logout pengguna
        Auth::logout();

        // Redirect ke halaman home atau halaman lain setelah logout
        return redirect('/');
    }
}
