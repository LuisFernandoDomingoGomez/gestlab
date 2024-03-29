<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	
	//Vistas de Crud
	Route::resource('roles', App\Http\Controllers\RolController::class);
	Route::resource('users', App\Http\Controllers\UserController::class);
	Route::resource('blogs', App\Http\Controllers\BlogController::class);
	Route::resource('orden-servicios', App\Http\Controllers\OrdenServicioController::class);
	Route::resource('reporte-muestreos', App\Http\Controllers\ReporteMuestreoController::class);
	Route::resource('muestras', App\Http\Controllers\MuestraController::class);
	Route::resource('registro-cilindros', App\Http\Controllers\RegistroCilindroController::class);
	Route::resource('informe-ensayos', App\Http\Controllers\InformeEnsayoController::class);
	
	//Exportaciones a documentos PDF
	Route::resource('reporte-vistas', App\Http\Controllers\ReporteVistaController::class);
	Route::resource('registro-vistas', App\Http\Controllers\RegistroVistaController::class);

	//Modulos de Formularios independientes
	Route::resource('reporte-v2stas', App\Http\Controllers\ReporteV2staController::class);
	Route::resource('reporte-v3stas', App\Http\Controllers\ReporteV3staController::class);
	Route::resource('reporte-v4stas', App\Http\Controllers\ReporteV4staController::class);
	Route::resource('reporte-v5stas', App\Http\Controllers\ReporteV5staController::class);
	Route::resource('registro-v1stas', App\Http\Controllers\RegistroV1staController::class);
	Route::resource('registro-v2stas', App\Http\Controllers\RegistroV2staController::class);
	Route::resource('informe-v1stas', App\Http\Controllers\InformeV1staController::class);


	//Generacion de vistas PDF
	Route::get('orden-servicio/pdf', 'App\Http\Controllers\OrdenServicioController@pdf')->name('orden-servicio.pdf');
	Route::get('reporte-muestreo/pdf', 'App\Http\Controllers\ReporteMuestreoController@pdf')->name('reporte-muestreo.pdf');
});

require __DIR__.'/auth.php';