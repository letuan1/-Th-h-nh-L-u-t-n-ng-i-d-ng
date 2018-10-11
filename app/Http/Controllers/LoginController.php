<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function showLogin()
    {
        return view('userLogin');
    }

    public function login(Request $request)
    {

        if ($request->inputUsername == "admin" && $request->inputPassword == "admin") {
            $login = $request->session()->push('login', true);
            $login = $request->session()->push('view', true);

            $view = $request->session()->flash('user', $request->inputUsername);

            return redirect(route('show.blog'));
        }

        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);
        return view('userLogin');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('login');
        return redirect(route('login'));
    }

}
