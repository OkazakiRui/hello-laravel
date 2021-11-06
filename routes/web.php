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
Route::get('/blade', [HelloController::class, "blade"]);
Route::get('/message', [HelloController::class, "message"]);
Route::get('/evenOddJudgment/{num}', [HelloController::class, "evenOddJudgment"]) -> where('num', '[0-9]+');