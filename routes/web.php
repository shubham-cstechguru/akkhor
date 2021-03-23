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

Route::group(['namespace' => 'Frontend', 'as' => 'home.'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/pricing', 'PricingController@index')->name('pricing');
    Route::get('/request-demo', 'RequestController@create')->name('request');
    Route::post('/request-demo', 'RequestController@store')->name('request.post');
    Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
    Route::get('/contactus', 'ContactController@create')->name('contactus');
    Route::post('/contactus', 'ContactController@store')->name('contactus.post');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/{slug}', 'PagesController@index')->name('pages');
});


