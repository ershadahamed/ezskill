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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    // All route
    Route::get('/', function(){
        return view('all.dashboard.index');
    })->name('dashboard');
    Route::get('/dashboard', function(){
        return view('all.dashboard.index');
    })->name('dashboard');

    // Admin route
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/roles', 'RoleController@index')->name('roles');

        Route::resource('pay-setting', 'PaymentSettingController');

        Route::resource('user', 'UserController');

        Route::get('/transaction', function(){
            return view('admin.transaction.index');
        })->name('transaction');
    });

});

Route::get('/pdf', 'PdfController@index');