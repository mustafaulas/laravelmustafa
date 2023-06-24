<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogFController extends Controller
{
    public function index(){
        $posts = Blog::orderBy('id',"desc")->get();
        return view("home.home",compact("posts"));
    }
    public function show($id){
        $post = Blog::where("id",$id)->first();
        return view("home.show",compact("post"));
    }
}
