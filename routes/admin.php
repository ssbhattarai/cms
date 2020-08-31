<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['auth']], function () {

    Route::get('/student', 'StudentController@index');
    Route::get('/admin', 'ROLE\SuperAdmin@index');
    

    Route::group(['prefix' => 'admin'], function() {

        Route::get('/user', 'admin\UserController@index')->name('users.index');
        Route::get('/roles', 'admin\RoleController@index')->name('roles.index');
        
        Route::group(['prefix' => 'user'], function() {
            Route::get('/create', 'admin\UserController@create')->name('users.create');
            Route::post('/store', 'admin\UserController@store')->name('users.store');
            
        });

        Route::group(['prefix' => 'roles'], function() {
            Route::get('/create', 'admin\RoleController@create')->name('roles.create');
            Route::post('/store', 'admin\RoleController@store')->name('roles.store');
            
        });


        //*  All routes for the frontend changes

        Route::post('sliderimage/delete','admin\frontend\SliderImages@fileDestroy')->name('sliderimage.delete');
        Route::get('/sliderimage','admin\frontend\SliderImages@index');
        Route::post('/sliderimage/store','admin\frontend\SliderImages@store')->name('sliderimage.store');

        Route::get('/about-us','admin\frontend\AboutusController@index');
        Route::post('/about-us/store','admin\frontend\AboutusController@store')->name('aboutus.store');


    }); 
});