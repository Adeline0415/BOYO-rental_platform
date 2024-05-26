<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
 
        //verification
        $user =  User::create([
            'name'=> request('name'),
            'email'=> request('email'),
            'password'=> request('password')
        ]);
        Auth::login($user);
        return redirect('/home');

    }
}
