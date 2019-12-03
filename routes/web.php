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


    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login/store', 'LoginController@store')->name('login.store');
    Route::get('/log-out', 'LoginController@logout')->name('logout');

    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register/store', 'RegisterController@store')->name('register.store');

    Route::get('/', 'IndexController@index')->name('index');

    Route::post('index/store', 'IndexController@store')->name('batari.store');

    
    Route::middleware(['auth'])->group(function(){
        
        Route::resource('/education', 'Admin\EducationController');
        Route::resource('/contact', 'Admin\ContactController');
        Route::resource('/about', 'Admin\AboutController');
        Route::resource('/activity', 'Admin\ActivityController');

    });	   