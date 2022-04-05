<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }
    public function login(){
        return view('');
    }
    public function register(){
        return view('register');
    }
    public function forgetpw(){
        return view('user.forgetpw');
    }
    public function profile(){
        return view('user.user-profile');
    }
}
