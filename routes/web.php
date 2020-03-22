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
/*
Route::get('/', function () {
    Route::get('/', 'HomeController@index');
    //return view('welcome');
})->name('home');
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contacto', function(){
    return redirect()->to(route('home').'#contact');
});

Route::get('/drafts', 'HomeController@drafts');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Auth::routes();

Route::prefix('productos')->group(function() {
    Route::get('/listado', 'ProductController@find');
    Route::get('/deteccion', 'ProductController@detection');
    Route::get('/extincion', 'ProductController@extintion');
});
/*
Route::get('/productos', function(){
   return view('products.products');
})->name('products');

Route::get('/productos/detection', function(){
    return view('products','#deteccion');
})->name('products.detection');

/*
Route::get('/productos/deteccion', function(){
    return redirect()->to(route('products').'#deteccion');
});

Route::get('/productos/extincion', function(){
    return redirect()->to(route('products').'#extincion');
});
*/

Route::get('/servicios', function(){
    return view('services.services');
})->name('services');

Route::get('/servicios/dyc', function(){
    return redirect()->to(route('services').'#dyc');
});

Route::get('/servicios/provision', function(){
    return redirect()->to(route('services').'#provision');
});

Route::get('/servicios/instalaciones', function(){
    return redirect()->to(route('services').'#instalaciones');
});

Route::get('/servicios/mantenimiento', function(){
    return redirect()->to(route('services').'#mantenimiento');
});

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/drafts', 'DraftController@index');
    Route::get('/drafts/create', 'DraftController@create');
    Route::post('/drafts', 'DraftController@store');
    Route::get('/drafts/{draft}/edit', 'DraftController@edit');
    Route::post('/drafts/edit', 'DraftController@update');
    Route::delete('/drafts', 'DraftController@destroy');

    Route::get('/drafts/{id}/images', 'DraftImageController@index'); // listado
	Route::post('/drafts/{id}/images', 'DraftImageController@store'); // registrar
	Route::delete('/drafts/images', 'DraftImageController@destroy'); // form eliminar
    Route::get('/drafts/{id}/images/select/{image}', 'DraftImageController@select'); // destacar

    Route::get('/products', 'ProductController@index');
    Route::get('/products/create', 'ProductController@create');
    Route::post('/products', 'ProductController@store');
    Route::get('/products/{draft}/edit', 'ProductController@edit');
    Route::post('/products/edit', 'ProductController@update');
    Route::delete('/products', 'ProductController@destroy');

});
