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

Route::get('/getDias', 'PaquetesController@getDias')->middleware('auth');
Route::get('/getComida', 'PaquetesController@getComida')->middleware('auth');

/**
 * Rutas de ejemplo para el pdf
 */
Route::get('pdf','PdfController@getIndex');
Route::get('pdf/generar','PdfController@getGenerar');

/** 
 * Ruta del dashboard
*/
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');


/**
 * Rutas para el registro e inicio de sesión
 */
Auth::routes();


/**
 * grupo de rutas para modificar el perfil del usuario
 */
Route::resource('/user' ,'UserController');
Route::post('/user/updatepassword' ,'UserController@UpdatePassword');//->middleware('auth'); //Actualizar la contraseña
Route::post('/user/updateimagen' ,'UserController@UpdateImagen');//->middleware('auth'); //Cambiar imagen de perfil


/** 
 * Rutas de los controladores
 */
Route::resource('/empleados', 'EmpleadosController');//->middleware(['role:Administrador|AdminVentas']); //Controlador para los empleados
Route::resource('/clientes', 'ClienteController')->middleware(['role:Administrador|AdminFiestas']); //Controlador para los clientes
Route::resource('/productos', 'ProductoController')->middleware(['role:Administrador|AdminCocina']); //Controlador para el inventario
Route::resource('/paquetes', 'PaquetesController')->middleware(['role:Administrador|AdminFiestas']); //Controlador para los paquetes
Route::resource('/fiestas', 'FiestaController')->middleware(['role:Administrador|AdminFiestas']); //Controlador de las fiestas
Route::resource('/PDVC', 'PuntoDeVentaCocinaController')->middleware(['role:Administrador|AdminVentas|VendedorPVCocina']);//Punto de venta de cocina
Route::resource('/PDVE', 'PuntoDeVentaEntradaController')->middleware(['role:Administrador|AdminVentas|VendedorPVEntrada']);//Punto de venta de entrada
Route::resource('/ventas', 'VentaController')->middleware(['role:Administrador|AdminVentas']);//Nuevo controlador de venta (Será el definitivo)
Route::resource('/promociones', 'PromocionesController')->middleware(['role:Administrador|AdminFiestas']); //Controlador para las promociones
Route::resource('/enviarPromociones', 'EnviarCorreosController')->middleware(['role:Administrador|AdminFiestas']);

/**
* Funciones del controlador de fiestas para agregar los abonos a una fiesta asi como liquidar el total de la fiesta
*/
Route::post('/fiestas/{fiesta}/addAbonoEfectivo', 'FiestaController@addAbonoEfectivo')->middleware(['role:Administrador|AdminFiestas']);
Route::post('/fiestas/{fiesta}/addAbonoTarjeta', 'FiestaController@addAbonoTarjeta')->middleware(['role:Administrador|AdminFiestas']);

Route::post('/fiestas/{fiesta}/addLiquidacionEfectivo', 'FiestaController@addLiquidacionEfectivo')->middleware(['role:Administrador|AdminFiestas']);
Route::post('/fiestas/{fiesta}/addLiquidacionTarjeta', 'FiestaController@addLiquidacionTarjeta')->middleware(['role:Administrador|AdminFiestas']);

Route::post('/fiestas/{fiesta}/liquidarFiesta', 'FiestaController@liquidarFiesta')->middleware(['role:Administrador|AdminFiestas']);

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
});

Route::group(['middleware' => ['role:VendedorPVEntrada']], function () {
    
    //rutas de punto de venta de entrada
});

Route::group(['middleware' => ['role:VendedorPVCocina']], function () {
    
    //rutas de punto de venta de cocina
});*/


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


