<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        // Session::flash('email', $request->email); ==> notifikasi flash massage
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard');
        } else {
            return redirect('sesi')->withErrors('Email atau Password salah');
        };
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
