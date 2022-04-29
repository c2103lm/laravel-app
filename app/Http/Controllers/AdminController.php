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
      //  \App\Models\User::create([
      //     'name' => 'Test Admin',
      //     'email' => 'test@gmail.com',
      //     'password' => bcrypt(123456)
      //  ]);
       return view('admin.login');
    }

    public function check_login(Request $req)
    {
       $data = $req->only('email','password');
       $check = Auth::attempt($data, $req->has('remember'));
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