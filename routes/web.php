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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/drafts', 'DraftController@index');
    Route::get('/drafts/create', 'DraftController@create');
    Route::post('/drafts', 'DraftController@store');
    Route::get('/drafts/{draft}/edit', 'DraftController@edit');
    Route::post('/drafts/{draft}/edit', 'DraftController@update');
    Route::get('/drafts/{id}/del', 'DraftController@destroy'); 

});
