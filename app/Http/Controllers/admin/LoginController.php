<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show_login_view(){
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request){

        // $user = Admin::where('username', $request->username)->first();

        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     return response()->json(['message' => 'Invalid credentials'], 401);
        // }
        if(auth()->guard('admin')->attempt(['username'=>$request->input('username') , 'password'=>$request->input('password')])){
            return redirect()->route('admin.dashboard');
        };
        // return redirect()->route('admin.dashboard');

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }
    // public function make_new_admin(){
    //     $admin = new App\Models\Admin();
    //     $admin->name = 'admin';
    //     $admin->email = 'test@gmail.com';
    //     $admin->username = 'admin';
    //     $admin->password = bcrypt('admin');
    //     $admin->com_code = 1 ;
    //     $admin->save();
    // }
    // "$2y$10$Ke4eEUHkKBHUbrgk2GQpCeNwWKeuBHJhOMT0kS5j97Q4TaqseatbW"
}
