<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index() {
        return "All Posts";
    }

    function show($id) {
        return "Post id - ${id}";
    }

    function create() {
        
    }

    function store() {
        
    }

    function edit() {
        
    }

    function update() {
        
    }

    function destory() {
        
    }
}
