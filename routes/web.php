<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

//to return view

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/abdo',[TestController::class,'abdo']);
// Route::get('/printname/{name?}',[TestController::class,'PrintName'])->name('thename');

// Route::get('/3bkreem',function(){
//     return view('index');
// });

//Route grouping
//using the common controller and class
Route::controller(TestController::class)->group(function (){
    Route::get('/abdo','abdo');

    Route::get('/printname/{name?} ','PrintName')->name('thename');
});

//artisan commands 
/** 
 * [php artisan route:list] => used to display all routes in the project
 * 
 * 
*/

