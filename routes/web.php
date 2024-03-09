<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('greeting', function () {
    return 'Hello World';
});

// Route::match(['get', 'post'], '/', function () {
//     return 'Hello World';
// });
Route::redirect('/foo', '/greeting');
Route::view('/welcome', 'welcome',['name' => 'Tom']);//array print http variable Tom



