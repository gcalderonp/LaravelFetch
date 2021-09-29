<?php

use App\Cliente;
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

Route::get('/', 'ClienteController@index')->name('clienteIndex');

Route::get('clienteNuevo', 'ClienteController@Create')->name('ClienteCreate');

Route::Post('clienteStore', 'ClienteController@Store')->name('ClienteStore');

Route::put('clienteUpdate', 'ClienteController@Update')->name('ClienteUpdate');

Route::get('cliente/{cliente}', 'ClienteController@edit')->name('clienteEdit');
