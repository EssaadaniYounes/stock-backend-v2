<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',function() {return view('welcome');});
Route::post('/', function() {
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    if (!is_numeric($first_number) || !is_numeric($second_number)) {
        $result = [
            "type" => 'error',
            'message' => 'Les valeurs ne sont pas valide'
        ];
    }
    else{
        $sum = $first_number + $second_number;
        $result = [
            "type" => 'success',
            'message' => "The sum of $first_number and $second_number is $sum."
        ];
    }
    return view('welcome',compact('result'));
});
