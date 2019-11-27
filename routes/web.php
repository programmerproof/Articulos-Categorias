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
if (\Session::get('conected') == "NO"){
	return view('Auth/login');
}else{
	
Route::get('/home', function () {
    return view('home');
});

Route::get('/articulo', 'ArticuloController@index')->name('articulo');

Route::get('/categoria', 'CategoriaController@index')->name('categoria');

Route::match(['get', 'post'], 'categoria/save', 'CategoriaController@save');

Route::match(['get', 'post'], 'categoria/update/{id}', 'CategoriaController@update');

Route::match(['get', 'post'], 'categoria/edit/{id}', 'CategoriaController@edit');

Route::match(['get', 'post'], 'articulo/save', 'ArticuloController@save');
}

Route::get('/', function () {
    return view('Auth/login');
});