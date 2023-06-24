<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BlogFController;
use App\Http\Controllers\Auth\LoginPController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogBController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogFController::class,"index"])->name("home");
Route::get('/posts/{id}', [BlogFController::class,"show"])->name("show");
Route::get('/login', function (){
    if(Auth::check()){
        return redirect()->route("admin.home");
    }
    return view("admin.login");
})->name("login");
Route::post('/loginp/', [LoginPController::class,"loginp"])->name("loginp");

Route::get('/register', function (){
    if(Auth::check()){
        return redirect()->route("admin.register");
    }
    return view("admin.register");
})->name("register");
Route::post('/registerp/', [LoginPController::class,"registerp"])->name("registerp");


//
//Route::prefix("admin")->group(function(){
//    Route::prefix("users")->group(function(){
//        Route::get('/', [UserController::class,"index"])->name("admin.users.index");
//        Route::get('/delete/{id}', [UserController::class,"delete"])->name("admin.users.delete");
//        Route::get('/update/{id}', [UserController::class,"update"])->name("admin.users.update");
//    });
//});

Route::group(["prefix"=>"admin", "middleware"=>["IsLogin"] ], function(){
    Route::get('/', function (){
        return view("admin.home");
    })->name("admin.home");
    Route::get('/logout', [LoginPController::class,"logout"])->name("admin.logout");

    Route::prefix("users")->group(function(){
        Route::get('/', [UserController::class,"index"])->name("admin.users.index");
        Route::get('/delete/{id}', [UserController::class,"delete"])->name("admin.users.delete");
        Route::get('/update/{id}', [UserController::class,"update"])->name("admin.users.update");
        Route::get('/add', [UserController::class,"addindex"])->name("admin.users.add");
        Route::post('/addpost', [UserController::class,"addpost"])->name("admin.users.addpost");
        Route::post('/updatepost', [UserController::class,"updatepost"])->name("admin.users.updatepost");
    });
    Route::prefix("blogs")->group(function(){
        Route::get('/', [BlogBController::class,"index"])->name("admin.blogs.index");
        Route::get('/create', [BlogBController::class,"create"])->name("admin.blogs.create");
        Route::post('/store', [BlogBController::class,"store"])->name("admin.blogs.store");
        Route::get('/destroy/{id}', [BlogBController::class,"destroy"])->name("admin.blogs.destroy");

    });
});

////sil
Route::get('/adduser', [UserController::class,"adduser"]);
Route::get('/w',  function (){
    return view("welcome");
});
