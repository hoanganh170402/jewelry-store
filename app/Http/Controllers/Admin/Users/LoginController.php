<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login',[
            'title' => 'Đăng Nhập',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ], $request->input('remember'))) {

            return redirect()->route('admin');
        }

        Session::flash('error','Sai Tài Khoản Hoặc Mật Khẩu');
        return redirect()->back();
    }
}
