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

Route::get('/', function () {
    return view('welcome');
    //return "Home";
});

Route::get('/usuarios', function () {
    //return view('welcome');
    return "Usuarios";
});

//EJEMPLOS: Enviar valores mediante GET
/*Route::get('/usuarios/detalles', function () {
    //return view('welcome');
    return 'Mostrando detalles del usuario '.$_GET['id'];
});*/

//EJEMPLOS: Enviar valores parametro Dinamico
Route::get('/usuarios/nuevo', function () {
    // return 'Mostrando detalles del usuario '.$id;
    return "Crear nuevo usuario";
});

//EJEMPLOS: Enviar valores parametro Dinamico
Route::get('/usuarios/{id}', function ($id) {
    // return 'Mostrando detalles del usuario '.$id;
    return "Mostrando detalle del usuario {$id}";
})->where('id', '[0-9]+');

//EJEMPLOS: El "?" permite que la variable pueda o no existir
Route::get('/saludo/{nombre}/{nickname?}', function ($nombre, $nickname = null) {
    if (empty($nickname) != true)
    return "Tu nombre es {$nombre} y tu apodo es {$nickname}";
    else
    return "Tu nombre es {$nombre} y no tienes apodo";
});
