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

Route::group(['middleware' => 'jwt.auth'], function () {
	
	Route::resource('empresas', 'EmpresaController');

	Route::resource('propiedades', 'PropiedadController');

	Route::resource('usuarios', 'UserController');
});

Route::post('/login', 'AuthController@userAuth');

Route::get('register/verify/{confirmationCode}', 'UserController@confirm');