<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Administrator;
use Hash;

class AdminLoginController extends Controller
{
    public function index(){
        return view('auth.administrator.login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $count_email = Administrator::where('email', $email)->count();
        $count_password = Administrator::where('password', $password)->count();
        dd($password);
        // $admin = Administrator::whereRaw('email == ' . $email . '&& ');
        // if(Administrator::where('email', '==', $email)->get()){
        //     if(Administrator::where('password', '==', $password)->get()){
        //         return redirect()->route('admin_login')->with('message', 'Success');
        //     } else {
        //         return redirect()->route('admin_login')->with('message', 'Password wrong');
        //     }
        // } else{
        //     return redirect()->route('admin_login')->with('message', 'Email wrong');
        // }

    }
}
