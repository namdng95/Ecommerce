<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin(){
        return view('web.login');
    }

    public function showRegister(){
        return view('web.register');
    }

    public function login(LoginRequest $request){
        $credentials = ['email' => $request->email, 'password' => $request->password];
        $remember = $request->remember == 'on' ? true : false;

        if(!Auth::attempt($credentials, $remember)){
            Session::flash('error_login', trans('master.message.error_login'));
            return redirect()->back()->withInput(Input::all());
        }else{
            if(Auth::user()->isUser()){
                Session::flash('success_login', trans('master.message.success_login'));
                return redirect()->route('home');
            }
        }
        return redirect()->route('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
