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

//any other page in pages
Route::get('/soundboard', function(){
    return File::get(public_path().'/SoundBoard/web/index.html');
});
Route::get('/Soundboard', function(){
    return File::get(public_path().'/SoundBoard/web/index.html');
});
Route::get('/{page?}', 'PageController@show')->where('page','.*');
