<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\BMIController;
use App\Http\Controllers\NoteController;

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

Route::get('/bmi',[BMIController::class, "index"])->name("bmi");
Route::post('/bmi/send', [BMIController::class, "store"])->name("bmi.store");

Route::get('/notes', [NoteController::class, "index"])->name("notes");
Route::get('/notes/{noteId}', [NoteController::class, "show"])->name("get") -> where(["noteId" => "[0-9]+"]);
Route::get('/notes/new', [NoteController::class, "new"])->name("notes.new");
Route::post('/notes', [NoteController::class, "store"])->name("notes.create");
