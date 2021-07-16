<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithController extends Controller
{
    //
    function Substraction ($a,$b){
        return $a-$b;
    }
    function Addition ($a,$b){
        return $a+$b;
    }
    function multiplication ($a,$b){
        return $a*$b;
    }
    function Division ($a,$b){
        return $a/$b;
    }
}
