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

// Route::get('greeting', function () {
//     return 'Hello World';
// });

// Route::match(['get', 'post'], '/', function () {
//     return 'Hello World';
// });
Route::any ('foo', function () {
    return 'Hello World';

    } );

