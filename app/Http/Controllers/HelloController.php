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
}
