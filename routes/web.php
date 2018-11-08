<?php

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

Route::get('/test', function () {
    return view('seopage');
});



Route::get('app/get/some-data-from-laravel', [
    'uses' => 'HomeController@data',
]);


Route::any('{slug}', [
    'uses' => 'HomeController@home',
])->where('slug', '([A-z\d-\/_.]+)?');
