<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index')->with('success','Selamat Datang '.$request->username);
        }

        return back()->with([
            'success' => 'Wrong username or password',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Berhasil');
    }
}
