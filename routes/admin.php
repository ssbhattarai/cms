<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['auth']], function () {

    
    Route::get('/student', 'StudentController@index');


   
    // Route::resource('products','ProductController');
    
    Route::group(['middleware' => ['role:super-admin']], function () {
        Route::resource('roles','RoleController');
        Route::resource('users','admin\UserController');
        Route::get('/admin', 'ROLE\SuperAdmin@index');
    });

    Route::group(['prefix' => 'admin'], function() {




        //defined 5 routes only accessible by teacheradmin
        // Route::get('/user', 'admin\UserController@index')->name('users.index');

        Route::group(['prefix' => 'user'], function() {
            //defined 5 routes only accessible by teacheradmin
            // Route::get('/create', 'admin\UserController@create')->name('users.create');
            
        });
    });
    
});