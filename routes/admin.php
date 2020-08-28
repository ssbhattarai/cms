<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['auth']], function () {

    Route::get('/student', 'StudentController@index');
    Route::get('/admin', 'AdminController@index');
});