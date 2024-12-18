<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showCreatePostForm(){
        return view('create-post');
    }
}
