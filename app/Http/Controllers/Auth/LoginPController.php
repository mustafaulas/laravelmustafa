<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPController extends Controller
{
    public function loginp(Request $request){

        //dd([ "email"=>$request->email, "password"=>$request->password ]);
        if (Auth::attempt([ "email"=>$request->email, "password"=>$request->password ])){

            return redirect()->route("admin.home");
        }
        else{
            return redirect()->route("login")->withErrors("kullanıcı yok")->withInput();
        }
    }
    public function logout(){
        //dd(Auth::user()->id);
        Auth::logout();
        return redirect()->route("home");
    }
}
