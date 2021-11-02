<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function get_data_register(Request $request)
    {
        $validate = $request->validate([
            'email'=>['required', 'min:3', 'max:100', 'unique:users'],
            'username' => ['required', 'min:3', 'max:100', 'unique:users'],
            'password' => ['required', 'min:8', 'max:100'],
            'password_repeat' => 'required_with:password|same:password'
        ]);
        $validate['password']= Hash::make($validate['password']);
        User::create($validate);
        $request->session()->flash('success', 'Hallo ' . $validate['username'] . '... Anda bisa mulai login!!!');
        return redirect()->route('login');
    }
}
