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

Route::get('/pasajero', 'PasajeroController@index');
Route::post('/pasajero/store', 'PasajeroController@store');

Route::get('/autor', 'AutorController@index');
Route::post('/autor/store', 'AutorController@store');
Route::post('/autor/show', 'AutorController@show');

Route::post('/alumno/storeAttach', 'AlumnoController@storeAttach');
Route::post('/alumno/storeSync', 'AlumnoController@storeSync');

Route::get('/curso', 'CursoController@getprogramas');


// 2 taller

Route::get('/administrador', 'AdministradorController@index');
Route::post('/administrador/create', 'AdministradorController@storecreate');
Route::post('/administrador/createmany', 'AdministradorController@storecreatemany');

Route::get('/usuario', 'ImagenController@index');
Route::post('/usuario/create', 'UsuarioController@storecreate');
Route::post('/usuario/createmany', 'UsuarioController@storecreatemany');

Route::get('/empleado', 'ImagenController@index');
Route::post('/empleado/create', 'EmpleadoController@storecreate');
Route::post('/empleado/createmany', 'EmpleadoController@storecreatemany');

Route::get('/imagen', 'ImagenController@index');