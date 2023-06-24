<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Str;

class UserController extends Controller
{
    public function addpost(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = Hash::make( $request->password);
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
        return redirect()->route("admin.users.index");
    }
    public function addindex(){
        return view("admin.users.add_index");
    }
    public function updatepost(Request $request){
        $user = User::find($request->id);
        if(isset($user)){
            $user->name = $request->name;
            $user->email =  $request->email;
            $user->password = Hash::make( $request->password);
            $user->save();
        }
        return redirect()->route("admin.users.index");
    }
    public function update($id){
        $user = User::find($id);
        return view("admin.users.updateindex",compact("user"));
    }
    public function index(){
        $users = User::orderBy('id')->get();
        return view("admin.users.index",compact("users"));
    }
    public function delete($id){
        $user = User::find($id);
        if(isset($user)){
            $user->delete();
        }
        return redirect()->route("admin.users.index");
    }

}
