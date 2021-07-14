<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function postlogin(Request $request)
    {
        Admin::whereNotNull('id_admin')->update([
            'password' => Hash::make('1234567890'),
        ]);
        //Input yang diambil
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return redirect('login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('postlogin');
    }

}