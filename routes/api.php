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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


 Route::get('clase_curso','API\CursoController@clase_curso');
Route::resource('curso','API\CursoController');

Route::resource('clase','API\ClaseController');
Route::resource('programa','API\ProgramaController');

