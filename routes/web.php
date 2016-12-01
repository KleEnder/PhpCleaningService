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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', ['uses' => 'AboutMe@addTitle']);

Route::get('/posts', ['uses' => 'AddPost@addTitle']);

Route::post('/posts', ['uses' => 'AddPost@store']);

Auth::routes();

Route::get('/home', 'HomeController@index');

// /admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'acl']], function() {
        // Matches The "/admin/users" URL
    Route::get('users', 'UserController@listUsers');
        // Matches The "/admin/search" URL
    Route::get('search', 'UserController@search');
    Route::get('service/add', 'Services@addService');
    Route::post('service/save', 'Services@saveService');
    Route::get('service/list', 'Services@listService');
    Route::get('service/edit/{id}', 'Services@editService');
    Route::post('service/update/{id}', 'Services@updateService');
});

Route::group(['prefix' => 'ratings', 'middleware' => ['web','auth']], function () {
    Route::get('userji', 'UserController@listaUserjev');
    Route::post('users', function () {
        echo 'dela';
        exit;
    });
});