<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class AuthController extends Controller
{
    //
    public function Login()
    {
        # code...
        return view('auths.login');
    }
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');  
        }
        return redirect('/login')->with('error','Email Atau Password Anda Salah !');

    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function register(){
       
        return view('auths.register');
    }
    public function postregister(Request $request)
    {
        //
        $user=new \App\User;
        $user->role='admin';
        $user->name=$request->nama;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->remember_token=str_random(60);
        $user->save();
        return redirect("/login")->with('sukses','berhasil Register');
    }
}
