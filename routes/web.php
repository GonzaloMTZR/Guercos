<?php
use App\User;
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
    if(Auth::check()){
        return redirect('/dashboard');
    }else{
        return view('auth.login');
    }
});

/*Route::group(['middleware' => ['role:AdminCocina']], function () {
    Route::resource('/productos', 'ProductoController')->middleware('auth');
});

Route::group(['middleware' => ['role:AdminFiestas']], function () {
    Route::resource('/paquetes', 'PaquetesController')->middleware('auth');
    Route::resource('/fiestas', 'FiestaController')->middleware('auth');
    Route::resource('/clientes', 'ClienteController')->middleware('auth');
    //Route::resource('/empleados', 'EmpleadosController')->middleware('auth');
});

Route::group(['middleware' => ['role:AdminVentas']], function () {
    Route::resource('/ventas', 'VentaController')->middleware('auth');
    //Route::resource('/empleados', 'EmpleadosController')->middleware('auth');
});

Route::group(['middleware' => ['role:Administrador']], function () {
    Route::resource('/empleados', 'EmpleadosController')->middleware('auth');
    Route::resource('/productos', 'ProductoController')->middleware('auth');
    Route::resource('/paquetes', 'PaquetesController')->middleware('auth');
    Route::resource('/fiestas', 'FiestaController')->middleware('auth');
    Route::resource('/ventas', 'VentaController')->middleware('auth');
    Route::resource('/clientes', 'ClienteController')->middleware('auth');
});*/

Route::group(['middleware' => ['role:VendedorPVEntrada']], function () {
    
    //rutas de punto de venta de entrada
});

Route::group(['middleware' => ['role:VendedorPVCocina']], function () {
    
    //rutas de punto de venta de cocina
});

//Ruta del dashboard
Route::get('/dashboard', 'PagesController@dashboard')->middleware('auth');
Route::resource('/perfil', 'PerfilController')->middleware('auth');


//Rutas para el registro e inicio de sesión
Auth::routes();



    //Rutas de los controladores
    Route::resource('/empleados', 'EmpleadosController')->middleware('auth');
    Route::resource('/perfil', 'PerfilController')->middleware('auth');
    Route::resource('/clientes', 'ClienteController')->middleware('auth');
    Route::resource('/productos', 'ProductoController')->middleware('auth');
    Route::resource('/paquetes', 'PaquetesController')->middleware('auth');
    Route::resource('/fiestas', 'FiestaController')->middleware('auth');
    Route::resource('/ventas', 'VentaController')->middleware('auth');


/*Rutas personalizdas para auth
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\AuthController@showRegistrationForm');
    Route::post('register', 'Auth\AuthController@register');

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');
*/


