<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\ArithController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/myfile', function () {
    return view('myfile');
});


// Route::get('user',[UserController::class,'show']);
// Route::get('data',[DataController::class,'hello']);

// Route::get('hide/{id}',[UserController::class,'hide']);

// Route::get('add/{number}/{b}',[ArithController::class,'Addition']);


