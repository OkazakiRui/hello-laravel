<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function findBook($bookNo) {
        echo "<h1>" . $bookNo . "番目の本です！</h1>";
    }

    public function greet(){
        echo "<h1>Hello controller!</h1>";
    }

    public function blade(){
        return view("hello");
    }

    public function message(){
        return view("messageView", ["message" => "helloControllerだよ〜！", "element" => "<h2>h2だよ〜！</h2>"]);
    }

    public function evenOddJudgment($num){
        return view("evenOddJudgment", ["num" => $num]);
    }
}
