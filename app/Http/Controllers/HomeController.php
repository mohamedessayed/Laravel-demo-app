<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    // public function oldindex () {

    // $name = "mohamed";
    // $age = 36;

    // return view('wlecome', ['userName'=>$name,'userAge'=>$age,'isUser'=>false,'records'=>[10,5,9]]); 
    // }


    public function index () {

        return view('index');
    
    }

    public function login() {
        return view('auth.login');
    }
}
