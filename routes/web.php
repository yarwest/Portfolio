<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//sets all of Laravel's Auth routes
/*Route::auth();
Route::get('/login/activation/check/{token}', 'Auth\LoginController@activate');

Route::group(['middleware'  =>  ['auth']], function () {
    //Any calls to any admin routes must be authenticated and must have permission
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'permission'], function () {
        Route::resource('/', 'DashboardController');
        Route::resource('site_meta', 'SiteMetaController');
    });
});*/


//any other page in pages
Route::post('/contact/send', 'PageController@send');
Route::get('/{page?}', 'PageController@show')->where('page','.*');