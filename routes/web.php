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
    return view('welcome'); /* devuelve el home */
});

// NO MODIFICAR LA RUTAS
// CUALQUIER COSA AGREGAR RUTAS A NUEVO MODELO Y NUEVO CONTROLADOR
// POR EJEMPLO USUARIOS - CARRITO - ETC
//

// nobasic - PRODUCTO ES EL ITEM EN SI MISMO
Route::get('/producto','ProductoController@index');
Route::get('/producto/create','ProductoController@create');
Route::post('producto/create','ProductoController@guardar');
Route::get('/producto/{id}','ProductoController@show')->name('producto');
Route::get('/producto/{id}/edit','ProductoController@edit');
Route::get('/producto/{id}/delete','ProductoController@delete');

// nobasic - TIPO ES SU GENERICO INMEDIATO [MOCHILA-GORRO-ETC]
Route::get('/tipo','TipoController@index');
Route::get('/tipo/create','TipoController@create');
Route::post('tipo/create','TipoController@guardar');
Route::get('/tipo/{id}','TipoController@show')->name('tipo');
Route::get('/tipo/{id}/edit','TipoController@edit');
Route::get('/tipo/{id}/delete','TipoController@delete');

// nobasic - CATEGORIA ES USO PROPUESTO [SPORTY - CITY - TECH]
Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/create','CategoriaController@create');
Route::post('categoria/create','CategoriaController@guardar');
Route::get('/categoria/{id}','CategoriaController@show')->name('categoria');
Route::get('/categoria/{id}/edit','CategoriaController@edit');
Route::get('/categoria/{id}/delete','CategoriaController@delete');





?>