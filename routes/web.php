<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

//to return view

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abdo',[TestController::class,'abdo']);
//this Route take parameter  

// ? => may have value and may be null
Route::get('/printname/{name?} ',[TestController::class,'PrintName']);

Route::get('/3bkreem',function(){
    return view('index');
});
