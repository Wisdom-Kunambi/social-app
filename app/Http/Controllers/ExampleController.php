<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage(){
        $animals = ['cat','dog','fox','panda','lion','tiger','elephant'];
        return view('homepage', ['allAnimals' => $animals]);
    }

    public function aboutPage(){
        return view('single-post');
    }
}
