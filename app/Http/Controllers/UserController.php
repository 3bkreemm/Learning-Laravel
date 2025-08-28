<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        dd('hello from user controller file');
    }
}
//invokable controller == single action controller
//just one function

//php artisan make:controller [name of controller] --invokable