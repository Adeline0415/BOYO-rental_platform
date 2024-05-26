<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
 
        //verification
        $user =  User::create([
            'name'=> request('name'),
            'email'=> request('email'),
            'password'=> request('password')
        ]);
        Auth::login($user);
        return redirect('/home');

    }

    public function index(){
 
        $user = Auth::user();
    
        return view('user.info', compact('user'));

    }



}
