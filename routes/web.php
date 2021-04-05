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

/**
 * Admin Control
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin-control', 'as' => 'admin.'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('login', 'AdminAuthController@getLogin')->name('login');
        Route::post('login', 'AdminAuthController@postlogin')->name('login.post');
        Route::get('logout', 'AdminAuthController@logout')->name('logout');
        Route::get('/forget-password', 'AdminAuthController@getEmail')->name('forgetpassword');
        Route::post('/forget-password', 'AdminAuthController@postemail')->name('forgetpassword.post');
        Route::get('/reset-password/{token}', 'AdminAuthController@getPassword')->name('resetpassword');
        Route::post('/reset-password', 'AdminAuthController@updatepassword')->name('resetpassword.post');
        Route::group(['middleware' => 'adminauth'], function () {
            Route::get('change-password', 'AdminAuthController@password')->name('password');
            Route::post('change-password', 'AdminAuthController@changepassword')->name('change-password');
        });
    });

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', 'AdminController@dashboard')->name('dashboard');

        Route::get('blog/list', 'BlogController@getblogs')->name('blog.list');
        Route::get('blogcategory/list', 'BlogCategoryController@getblogcategories')->name('blogcategory.list');
        Route::get('blogtags/list', 'BlogTagsController@getblogtags')->name('blogtags.list');
        Route::get('pricing/list', 'PricingController@getpricings')->name('pricing.list');
        Route::get('pages/list', 'PagesController@getpages')->name('pages.list');
        Route::get('services/list', 'ServiceController@getservices')->name('services.list');
        Route::get('testimonial/list', 'TestimonialController@gettestimonials')->name('testimonial.list');
        Route::get('religion/list', 'ReligionController@getReligion')->name('religion.list');
        Route::get('country/list', 'CountryController@getCountry')->name('country.list');
        Route::get('state/list', 'StateController@getState')->name('state.list');
        Route::get('city/list', 'CityController@getCity')->name('city.list');
        Route::get('/pages/remove-img/{page}', 'PagesController@removeimg')->name('removeimg');
        Route::get('/blog/remove-img/{blog}', 'BlogController@removeimg')->name('removeimgblog');
        Route::get('/services/remove-img/{services}', 'ServiceController@removeimg')->name('removeimgservice');
        Route::get('/testimonial/remove-img/{testimonial}', 'TestimonialController@removeimg')->name('removeimgtestimonial');


        Route::resources([
            'blog' => 'BlogController',
            'blogcategory' => 'BlogCategoryController',
            'blogtags' => 'BlogTagsController',
            'pricing' => 'PricingController',
            'pages' => 'PagesController',
            'services' => 'ServiceController',
            'testimonial' => 'TestimonialController',
            'religion' => 'ReligionController',
            'country' => 'CountryController',
            'state' => 'StateController',
            'city' => 'CityController',
            'school' => 'SchoolUserController'
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
            Route::get('/', 'DemoController@index')->name('request');
            Route::get('/list', 'DemoController@getdemos')->name('request.list');
            Route::delete('/remove/{id}', 'DemoController@remove')->name('request.remove');
        });
        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', 'ContactController@index')->name('contact');
            Route::get('/list', 'ContactController@getcontacts')->name('contact.list');
            Route::delete('/remove/{id}', 'ContactController@remove')->name('contact.remove');
        });
    });
});

/**
 * Website Frontend
 */

Route::group(['namespace' => 'Frontend', 'as' => 'home.'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/pricing', 'PricingController@index')->name('pricing');
    Route::get('/request-demo', 'DemoController@create')->name('request');
    Route::post('/request-demo', 'DemoController@store')->name('request.post');
    Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
    Route::get('/contactus', 'ContactController@create')->name('contactus');
    Route::post('/contactus', 'ContactController@store')->name('contactus.post');
    Route::group(['prefix' => '/blog'], function () {
        Route::get('/', 'BlogController@index')->name('blog');
        Route::get('/{slug}', 'BlogController@single')->name('blog.single');
    });
    Route::get('/{slug}', 'PagesController@index')->name('pages');
});

// Route::group(['namespace' => 'Frontend', 'as' => 'home.'], function () {
//     Route::get('/', 'HomeController@index')->name('index');
//     Route::get('/pricing', 'PricingController@index')->name('pricing');
//     Route::get('/request-demo', 'DemoController@create')->name('request');
//     Route::post('/request-demo', 'DemoController@store')->name('request.post');
//     Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
//     Route::get('/contactus', 'ContactController@create')->name('contactus');
//     Route::post('/contactus', 'ContactController@store')->name('contactus.post');
//     Route::group(['prefix' => '/blog'], function () {
//         Route::get('/', 'BlogController@index')->name('blog');
//         Route::get('/{slug}', 'BlogController@single')->name('blog.single');
//     });
//     Route::get('/{slug}', 'PagesController@index')->name('pages');
// });


