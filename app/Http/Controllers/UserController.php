<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class UserController extends Controller
{
    protected $redirectTo = '/home';

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $details = $request->all();

            if (Auth::attempt(['email' => $details['email'], 'password' => $details['password']])) {
                return redirect()->route('home');
            }
        }

        return view('login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $details = $request->all();

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            $user = User::create([
                'name' => $details['name'],
                'email' => $details['email'],
                'password' => bcrypt($details['password']),
                'role' => $details['role'],
            ]);
            if ($user) {
                Auth::attempt(['email' => $details['email'], 'password' => $details['password']]);

                return redirect()->route('home');
            }
        }

        return view('register', [
            'roles' => config('local.user.roles')
        ]);
    }

}