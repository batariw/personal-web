<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function store(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = auth()->user();
            Auth::login($user,true);
            return redirect()->intended('/education');
        }else{
            return redirect()->back();
        }
    }

}
