<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function dashboard()
    {
       return view('admin.dashboard');
    }

    public function login()
    {
       return view('admin.login');
    }

    public function check_login(Request $req)
    {
       $data = $req->only('email','password');
       $check = Auth::attempt($data);
       if ($check) {
          return redirect()->route('admin.index')->with('ok','Chào mừng trở lại');
       }
       return redirect()->back()->with('no','Đăng nhập thất bại');
    }

    public function logout()
    {
       Auth::logout();
       return redirect()->route('admin.login')->with('ok','Chào mừng trở lại');
    }
}