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
        });
    });
});
