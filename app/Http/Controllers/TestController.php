<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function abdo(){
        dd('hello abdo from TestController file');
    }

    //this name is variable 

    //error if there is no name  it must take default value
    public function PrintName ($name='default name'){
        return "hello $name from print name finction";
    }
}
