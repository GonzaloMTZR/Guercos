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
    return view('auth.login');
});

Route::get('/dashboard', 'PagesController@dashboard');

//Rutas de los controladores
Route::resource('/inventario', 'InventarioController');
Route::resource('/empleados', 'EmpleadosController');
Route::resource('/perfil', 'PerfilController');

//Rutas para el registro e inicio de sesión
Auth::routes();
