<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculeController extends Controller
{
    public function calculate(){
        $firstNumber = 12;
        $secondNumber =  10;
        $result = $firstNumber + $secondNumber;
        return view('welcome');
    }
}
