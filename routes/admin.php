<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', 'ROLE\SuperAdmin@index');
    


    Route::group(['prefix' => 'admin'], function() {
        //defined 5 routes only accessible by teacheradmin
        Route::get('/user', 'admin\UserController@index')->name('users.index');
    });
    
});