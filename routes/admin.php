<?php

use Illuminate\Support\Facades\Route;





Route::group(['middleware' => ['auth']], function () {

    Route::get('/student', 'StudentController@index');
    Route::get('/admin', 'ROLE\SuperAdmin@index');
    

    Route::group(['prefix' => 'admin'], function() {
        

        Route::get('users/exportexcel/', 'admin\UserController@exportExcel')->name('users.exportexcel');
        Route::get('users/exportcsv/', 'admin\UserController@exportCSV')->name('users.exportcsv');


        Route::get('/user', 'admin\UserController@index')->name('users.index');
        Route::get('/roles', 'admin\RoleController@index')->name('roles.index');
        Route::get('/students', 'admin\StudentController@index')->name('students.index');
        
        Route::group(['prefix' => 'user'], function() {

            Route::get('/edit-me', function (){
                return view('admin.pages.user.edit');
            });

            Route::get('/{id}/pdf','admin\UserController@createPDF')->name('users.pdf');

            Route::get('/create', 'admin\UserController@create')->name('users.create');
            Route::get('/show/{id}', 'admin\UserController@show')->name('users.show');
            Route::post('/store', 'admin\UserController@store')->name('users.store');
            Route::get('/{id}/edit', 'admin\UserController@edit')->name('users.edit');
            Route::delete('/{id}/delete', 'admin\UserController@destroy')->name('users.delete');
            Route::put('/{id}/update', 'admin\UserController@update')->name('users.update');
            Route::get('/changestatus', 'admin\UserController@changeStatus')->name('user.status');
            
        });

        Route::group(['prefix' => 'roles'], function() {
            Route::get('/create', 'admin\RoleController@create')->name('roles.create');
            Route::post('/store', 'admin\RoleController@store')->name('roles.store');
            
        });

        Route::group(['prefix' => 'students'], function() {
            Route::get('/{id}/pdf','admin\StudentController@studentPDF')->name('students.pdf');

            Route::get('/create', 'admin\StudentController@create')->name('students.create');
            Route::get('/show/{id}', 'admin\StudentController@show')->name('students.show');
            Route::post('/store', 'admin\StudentController@store')->name('students.store');

            // Route::get('/create', 'admin\S@create')->name('roles.create');
            // Route::post('/store', 'admin\RoleController@store')->name('roles.store');
            
        });


        //*  All routes for the frontend changes

        Route::post('sliderimage/delete','admin\frontend\SliderImages@fileDestroy')->name('sliderimage.delete');
        Route::get('/sliderimage','admin\frontend\SliderImages@index');
        Route::post('/sliderimage/store','admin\frontend\SliderImages@store')->name('sliderimage.store');

        Route::get('/about-us','admin\frontend\AboutusController@index');
        Route::post('/about-us/store','admin\frontend\AboutusController@store')->name('aboutus.store');


    }); 
});