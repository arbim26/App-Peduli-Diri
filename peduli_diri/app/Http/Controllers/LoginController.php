<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function postlogin(Request $request)
    {
        if(Auth::guard('user')->attempt((['nik' => $request->nik, 'password' => $request->password]))) {
          return redirect('/');
        }
        return redirect('/login');
    }

    public function registernew(Request $request)
    {
        $this->validate($request, [
          'name'=> 'required',
          'nik'=> 'required',
          'email'=> 'required',
          'password'=> 'required',
        ]);
        
        User::create([
            'name' =>$request->name,
            'nik' =>$request->nik,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60)
        ]);

        return redirect('/login');
    }

    public function logout()
    {
      if(Auth::guard('user')->check()){
        Auth::guard('user')->logout();
      }
      return redirect('/login');
    }
}
