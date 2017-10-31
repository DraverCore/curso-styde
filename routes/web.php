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

NOTAS PERSONALES:

        LAS RUTAS SE LEEN EN EL ORDEN EN QUE ESTAN ORDENADAS
*/

Route::get('/', 'UserController@welcome');

Route::get('/usuarios', 'UserController@index');

//EJEMPLOS: Enviar valores mediante GET
/*Route::get('/usuarios/detalles', function () {
    //return view('welcome');
    return 'Mostrando detalles del usuario '.$_GET['id'];
});*/

//EJEMPLOS: Enviar valores parametro Dinamico
Route::get('/usuarios/nuevo', 'UserController@create');

//EJEMPLOS: Enviar valores parametro Dinamico
Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

//EJEMPLOS: El "?" permite que la variable pueda o no existir
Route::get('/saludo/{nombre}/{nickname?}', 'WelcomeUserController');
