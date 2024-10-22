<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request) {
        $preUrl = $request->query('preUrl', '/');
        return view('backend.auth.login', ['preUrl' => $preUrl]);
    }

    public function login(Request $request) {
        $credantial = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $login = Auth::attempt($credantial);

        if ($login){
            $preUrl = $request->input('preUrl');
            if (isset($preUrl))
                return redirect()->to(urldecode($preUrl));

            return redirect()->route('after.login');
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

    public function afterLogin() {
        Toastr::success('Successfully logged in', 'Logged in!', ["positionClass" => "toast-top-center"]);
        if (Auth::user()->type == 3) return redirect()->route('profile', Auth::id());
        return redirect()->route('dashboard');
    }
}
