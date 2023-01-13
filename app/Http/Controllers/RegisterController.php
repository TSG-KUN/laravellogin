<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register() {
        return view('register.register', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'username' => ['required','max:64'],
            'email' => ['email:dns','required'],
            'password' => ['required','min:8'],
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login') -> with('success','Registration succesful! Please login!');
    }
}
