<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\signlog;

class RegisterController extends Controller
{
    public function create(){
        return view('SignUp');
    }

    public function store(){


        $attributes = request()->validate([
            'Username' => ['required','min:3','unique:users,Username'],

            'Password' => ['required','min:7'],
            'Email' => ['required','email','unique:users,Email']
        ]);

        $attributes['Password'] = bcrypt($attributes['Password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
        
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }


}