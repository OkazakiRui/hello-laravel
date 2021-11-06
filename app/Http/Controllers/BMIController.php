<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index() {
        return view("bmi");
    }

    public function store(Request $request) {
        // 個別に取得
        $height = $request->input("height");
        $weight = $request->input("weight");
        // まとめて取得 ( 配列 )
        $heightAndWeight = $request->only("height","weight");
        // すべて取得 ( 配列 )
        $all = $request->all();

        // 計算
        $bmi = $weight / pow($height / 100, 2);
        // echo "height: " . $height . "<br />" . "weight: " . $weight . "<br />" . "bmi: " . $bmi;

        return redirect()->route("bmi")->with("bmi", $bmi);
    }
}
