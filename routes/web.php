<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

//to return view

Route::get('/', function () {
    return view('index');
});

// Route::get('/3bkreem',function (){
//     return "I'm abdlekarim mohsen";
// });

Route::get('/abdo',[TestController::class,'abdo']);