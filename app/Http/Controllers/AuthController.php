<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerView() {
        return view('register');
    }

    public function loginView() {
        return view('login');
    }

    public function register(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/register');
    }

    public function login(Request $request) {
        $isFound = Auth::attempt([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect($isFound ? '/' : '/login');
    }
}
