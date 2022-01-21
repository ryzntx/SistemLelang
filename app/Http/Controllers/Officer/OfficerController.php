<?php

namespace App\Http\Controllers\Officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class OfficerController extends Controller
{
    public function index(){
        $user = User::all();
        return view('pages.officer.index', compact('user'));
    }
}
