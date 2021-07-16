<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show(){
        return "hello from controller";
    }
    function hide($id){
        return "Hello from controller  $id";
    }
}
