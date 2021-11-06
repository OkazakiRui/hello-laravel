<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/hello",function(){
    echo "<h1>Hello laravel!</h1>";
});
Route::get('/books/{bookNo}', [HelloController::class, "findBook"]);
Route::get('/greet', [HelloController::class, "greet"]);
