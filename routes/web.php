<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('home', 'homeControlador@home')->name('home');
Route::get('inicial', 'homeControlador@inicial');
Route::get('inicial/contato', 'homeControlador@contato');
Route::get('inicial/sobre', 'homeControlador@sobre');
Route::get('inicial/registro', 'homeControlador@registro');
Route::get('inicial/consultar', 'homeControlador@consultar');


//Prescricao
Route::get('cadastros/prescricao', 'ControladorPrescrisao@index');

//Medicamentos
Route::get('inicial/buscarMedicamento', 'ControladorBuscarMed@index');
Route::get('cadastros/medicamento', 'ControladorMedicamento@index');
Route::get('cadastros/medicamento', 'ControladorMedicamento@index'); 
Route::get('cadastros/medicamento/novo', 'ControladorMedicamento@create'); 
Route::post('cadastros/medicamento', 'ControladorMedicamento@store');
Route::get('cadastros/medicamento/editar/{idmedicamento}', 'ControladorMedicamento@edit');
Route::get('cadastros/medicamento/apagar/{idmedicamento}', 'ControladorMedicamento@destroy');
Route::post('cadastros/medicamento/{idmedicamento}', 'ControladorMedicamento@update');

//Material 
Route::get('inicial/buscarMaterial', 'ControladorBuscar@index');
Route::get('cadastros/material', 'ControladorMaterial@index'); 
Route::get('cadastros/material/novo', 'ControladorMaterial@create'); 
Route::post('cadastros/material', 'ControladorMaterial@store');
Route::any('inicial/buscarMaterial/search', 'ControladorBuscar@search')->name('inicial.buscarMaterial.search');
Route::get('cadastros/material/editar/{idmaterial}', 'ControladorMaterial@edit');
Route::get('cadastros/material/apagar/{idmaterial}', 'ControladorMaterial@destroy');
Route::post('cadastros/material/{idmaterial}', 'ControladorMaterial@update');

//Via
Route::get('cadastros/via', 'ControladorVia@index'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
