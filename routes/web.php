<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

//to return view

Route::get('/', function () {
    return view('welcome');
});

Route::view('/3bkreem','index');

Route::get('/abdo',[TestController::class,'abdo']);

//redirect (url,distination)

Route::redirect('/gmail','https://gmail.com');