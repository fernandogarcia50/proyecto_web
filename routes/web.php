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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('empleados/constancia', 'EmpleadoController@crear_constancia')->name('crt_cons');

Route::post('empleados/eliminar/{id}', 'EmpleadoController@eliminar')->name('eliminar');
Route::post('empleados/eliminarProd', 'ProductoController@eliminar')->name('eliminarproducto');
Route::post('empleados/actualizarPreProd', 'ProductoController@actualizarPrecios')->name('actualizarproducto');
Route::post('empleados/actualizarCodProd', 'ProductoController@actualizarCodigo')->name('actualizarproductocod');
Route::put('empleados/actualizar', 'EmpleadoController@ChangePass')->name('update');
Route::post('vacantes/actualizar', 'VacanteController@actualizarVacante')->name('updatevacante');

Route::get('vacantes/mostrar', 'VacanteController@showVcntProd')->name('mostrarVctProd');

Route::post('configuracion/actualizar/perfil', 'ConfiguracionController@cambiarContra')->name('updatecontra');
Route::resource('empleaods', 'EmpleadoController')->middleware('can:empleados');
Route::resource('productos', 'ProductoController')->middleware('can:productos');
Route::resource('vacantes', 'VacanteController')->middleware('can:vacantes');
Route::resource('config', 'OtroConfController')->middleware('can:vacantes');
Route::resource('configuracion', 'ConfiguracionController');
Route::get('/', function () {
    return redirect()->route('mostrarVctProd');
});
Route::view('/registro', 'empleados/registrar_empleado')->middleware('can:empleados')->name('registrarempleado');

Auth::routes();


