<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Session;

class Controller_Login extends Controller
{
    public function index_Login(){
        return view('Layouts.Login');
    }

    public function post_login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/View_berita');
        }
        return view('Layouts.Login')->with(['error' => 'Email/Password salah!']);
      }

      public function Dashboard(){
          return view('Login.Dashboard');
      }

      public function Logout(){
          return view('Layouts.Login');
      }

      public function view_regis(){
          return view('Login.Register');
      }

      protected function Register(Request $request)
      {
         User::Create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'g-captcha response'=> new Captcha()

         ]);
         return redirect()->back();
      }
}
