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

    Route::get('/drafts/{id}/images', 'DraftImageController@index'); // listado
	Route::post('/drafts/{id}/images', 'DraftImageController@store'); // registrar
	Route::delete('/drafts/{id}/images', 'DraftImageController@destroy'); // form eliminar	
    Route::get('/drafts/{id}/images/select/{image}', 'DraftImageController@select'); // destacar 
    
    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products', 'ProductController@store');
    Route::get('/products/{draft}/edit', 'ProductController@edit');
    Route::post('/products/{draft}/edit', 'ProductController@update');
    Route::get('/products/{id}/del', 'ProductController@destroy'); 


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
