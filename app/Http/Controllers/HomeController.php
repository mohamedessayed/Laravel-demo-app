<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index () {

    $name = "mohamed";
    $age = 36;

    return view('wlecome', ['userName'=>$name,'userAge'=>$age,'isUser'=>false,'records'=>[10,5,9]]); 
    }
}
