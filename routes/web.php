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

##empleados
//Route::get('/empleados', 'EmpleadosController@index');
//Route::get('/empleados/create', 'EmpleadosController@create');

Route::resource('empleados', 'EmpleadosController');
Route::resource('nominas', 'NominaController');
Route::resource('empresa', 'EmpresaController');
Route::resource('contrato', 'ContratoController');
Route::resource('intro', 'IntroController');

##empleados


Auth::routes();
Route::get('/intro', 'IntroController@index')->name('intro.index');
Route::get('user-list-pdf/{id}', 'EmpleadosController@exportarPdf')->name('users.pdf');
Route::get('certificado-pdf/{id}', 'EmpleadosController@certificadoPdf')->name('certificado.pdf');
Route::get('intro{id}', 'EmpleadosController@intro')->name('intro.intro');
Route::get('estadoactivo/{id}', 'EmpleadosController@estadoactivo')->name('estado.activo');
