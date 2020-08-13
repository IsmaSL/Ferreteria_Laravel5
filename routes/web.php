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
    return view('passwords/login');
});

Auth::routes();
*/

// Redireccionamiento directo a la vista de logueo
Route::view('/','auth/login');

// Rutas de autentifiacion
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Rutas de registro
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//==============================================================================
// Ruta de home
Route::get('/home', 'HomeController@index')->name('home');
//==============================================================================
// Ruta para clientes
Route::get('/contactos','contactoController@index')->name('contactos');
// Rutas de funciones de clientes
Route::resource('contactos','contactoController',['except'=>'show']);
//==============================================================================
// Ruta para proveedores
Route::get('/proveedores','proveedorController@index')->name('proveedores');
// Rutas de funciones de proveedores
Route::resource('proveedores','proveedorController',['except'=>'show']);
//==============================================================================
// Ruta para almacen
Route::get('almacen','almacenController@index')->name('almacen');
// Rutas de funciones del almacen
Route::resource('almacen','almacenController',['except'=>'show']);
//==============================================================================
// Ruta para ventas
Route::get('ventas','ventaController@index')->name('ventas');
// Rutas de funciones de ventas
Route::resource('ventas','ventaController');
//