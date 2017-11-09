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

	Route::resource('usuarios', 'UserController');

	Route::resource('acompannamientos', 'AcompannamientoController');
	Route::resource('agregados', 'AgregadoController');
	Route::resource('cargos', 'CargoController');
	Route::resource('comandas', 'ComandaController');
	Route::resource('menuComandas', 'MenuComandaController');
	Route::resource('agregadoMenuComandas', 'AgregadoMenuComandaController');
	Route::resource('menus', 'MenuController');
	Route::resource('mesas', 'MesaController');
	Route::resource('tipoAgregados', 'TipoAgregadoController');
	Route::resource('empleados', 'EmpleadoController');
	Route::resource('ventas', 'VentaController');
	
	//Obtener al usuario logueado
	Route::get('/getUser', 'AuthController@getAuthenticatedUser');
});

//Obtener token para un usuario registrado y activado
Route::post('/login', 'AuthController@authenticate');

//Verificar cuenta
Route::get('register/verify/{confirmationCode}', 'UserController@confirm');

Route::get('/registrar','Auth\RegisterController@create');

Route::resource('usuariost', 'UserController');

Route::resource('acompannamientost', 'AcompannamientoController');
Route::resource('agregadost', 'AgregadoController');
Route::resource('cargost', 'CargoController');
Route::resource('comandast', 'ComandaController');
Route::resource('menuComandast', 'MenuComandaController');
Route::resource('agregadoMenuComandast', 'AgregadoMenuComandaController');
Route::resource('menust', 'MenuController');
Route::resource('mesast', 'MesaController');
Route::resource('tipoAgregadost', 'TipoAgregadoController');
Route::resource('empleadost', 'EmpleadoController');
Route::resource('ventast', 'VentaController');
