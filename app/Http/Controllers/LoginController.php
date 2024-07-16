<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('backend.auth.login');
    }

    public function login(Request $request) {
        $credantial = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $login = Auth::attempt($credantial);

        if ($login){
            return redirect()->route('dashboard');
        }else{
            Session::flash('failed', 'Login Failed');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
