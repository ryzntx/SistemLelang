<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $user = User::all();
        return view('pages.administrator.index', compact('user'));
    }
}
