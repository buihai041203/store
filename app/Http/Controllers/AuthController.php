<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Hiển thị form login
    public function showLogin()
    {
        return view('login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        // Tìm user trong bảng users
        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            Session::put('user_id', $user->id);
            Session::put('email', $user->email);
            Session::put('name', $user->name);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email hoặc mật khẩu không đúng!');
    }

    // Trang dashboard
    public function dashboard()
    {
        if (!Session::has('user_id')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    // Đăng xuất
    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
}