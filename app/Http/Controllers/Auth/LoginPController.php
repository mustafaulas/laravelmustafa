<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function registerp(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = Hash::make( $request->password);
        //Sdd($request);
        if($request->hasFile("photo")){
            $path = public_path("Users/Photos/");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name .= $name.$file->getClientOriginalName();
            //getClientOriginalExtension();
            $file->move($path,$name);
            $user->photo =  $name;
            //dd("burada");
        }
        $user->save();
        return redirect()->route("login");
    }
}
