<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function showBlog(Request $request)
    {
        // Kiểm tra Session login có tồn tại hay không
        if ($request->session()->has('login')  && $request->session()->get('login')) {

            return view('blog');
        }

        // Session không tồn tại, người dùng chưa đăng nhập
        // Gán một thông báo vào Session not-login
        $message = 'Bạn chưa đăng nhập.';
        $request->session()->flash('not-login', $message);

        // Chuyển hướng về trang đăng nhập
        return view('login');
    }
}
