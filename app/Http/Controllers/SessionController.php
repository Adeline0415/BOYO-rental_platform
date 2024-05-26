<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $credentials = request()->only('email', 'password');

        Auth::attempt($credentials);
        request()->session()->regenerate();
        return redirect('/home');

    }

    public function destroy(){

        Auth::logout();
        return redirect('/');

    }
}
