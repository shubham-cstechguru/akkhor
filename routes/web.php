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

Route::get('/', function () {
    return view('frontend.inc.index');
});
Route::get('/request-demo', function () {
    return view('frontend.inc.request-demo');
});
Route::get('/pricing', function () {
    return view('frontend.inc.pricing');
});


