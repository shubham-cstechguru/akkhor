<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['namespace' => 'Admin'], function () {
    Route::group(['as' => 'admin.'], function () {
        Route::group(['namespace' => 'Auth'], function () {
            Route::get('login', 'AdminAuthController@getLogin')->name('login');
            Route::post('login', 'AdminAuthController@postLogin')->name('login.post');
            Route::get('logout', 'AdminAuthController@logout')->name('logout');
        });
        Route::group(['middleware' => 'adminauth'], function () {
            Route::get('/', 'AdminController@dashboard')->name('dashboard');

            Route::resources([
                'blog' => 'BlogController',
                'blogcategory' => 'BlogCategoryController',
                'blogtags' => 'BlogTagsController',
                'pricing' => 'PricingController',
                'pages' => 'PagesController',
                'services' => 'ServiceController',
                'testimonial' => 'TestimonialController'
            ]);
            Route::group(['prefix' => 'setting'], function () {
                Route::get('/', 'SettingController@edit')->name('setting');
                Route::post('/', 'SettingController@update')->name('setting.post');
            });
            Route::group(['prefix' => 'home-edit'], function () {
                Route::get('/', 'HomeController@edit')->name('home');
                Route::post('/', 'HomeController@update')->name('home.post');
            });
            Route::group(['prefix' => 'request'], function () {
                Route::get('/', 'RequestController@index')->name('request');
                Route::delete('/remove/{id}', 'RequestController@remove')->name('request.remove');
            });
            Route::group(['prefix' => 'contact'], function () {
                Route::get('/', 'ContactController@index')->name('contact');
                Route::delete('/remove/{id}', 'ContactController@remove')->name('contact.remove');

            });
        });
    });
});
