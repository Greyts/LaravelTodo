<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::view('/{path?}', './layouts/app');

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('tasks', 'TaskController', [
        'only'=>[
            'index', 'store', 'update'
        ]
    ]);
});

Route::get('/home', 'HomeController@index')->name('home');
