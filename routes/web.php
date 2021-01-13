<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Exame;
use App\Medicamento;
use App\Material;
use App\Procedimento;

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

Route::get('/medicamentos_procedimentos', function (){
    $medicamentos = Medicamento::with('procedimentos')->get();
    return $medicamentos->toJson();
});

Route::get('/materials_procedimentos', function (){
    $materials = Material::with('procedimentos')->get();
    return $materials->toJson();
});

Route::get('home', 'homeControlador@home')->name('home');
Route::get('inicial', 'homeControlador@inicial');
Route::get('inicial/sobre', 'homeControlador@sobre');
Route::get('inicial/registro', 'homeControlador@registro');




//Prescricao
Route::get('cadastros/prescricao', 'ControladorPrescricao@index');
Route::get('inicial/consultar', 'ControladorConsultar@index');
Route::get('cadastros/prescricao/novo', 'ControladorPrescricao@create'); 
Route::post('cadastros/prescricao', 'ControladorPrescricao@store');
Route::get('cadastros/prescricao/editar/{idprocedimento}', 'ControladorPrescricao@edit');
Route::get('cadastros/prescricao/apagar/{idprocedimento}', 'ControladorPrescricao@destroy');
Route::post('cadastros/prescricao/{idprocedimento}', 'ControladorPrescricao@update');
Route::any('inicial/consultar/search', 'ControladorConsultar@search')->name('inicial.consultar.search');

//Medicamentos
Route::get('inicial/buscarMedicamento', 'ControladorBuscarMed@index');
Route::get('cadastros/medicamento', 'ControladorMedicamento@index');
Route::get('cadastros/medicamento', 'ControladorMedicamento@index'); 
Route::get('cadastros/medicamento/novo', 'ControladorMedicamento@create'); 
Route::post('cadastros/medicamento', 'ControladorMedicamento@store');
Route::get('cadastros/medicamento/editar/{idmedicamento}', 'ControladorMedicamento@edit');
Route::get('cadastros/medicamento/apagar/{idmedicamento}', 'ControladorMedicamento@destroy');
Route::post('cadastros/medicamento/{idmedicamento}', 'ControladorMedicamento@update');
Route::any('inicial/buscarMedicamento/search', 'ControladorBuscarMed@search')->name('inicial.buscarMedicamento.search');

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
Route::get('inicial/buscarVia', 'ControladorBuscarVia@index');
Route::get('cadastros/via', 'ControladorVia@index'); 
Route::get('cadastros/via/novo', 'ControladorVia@create'); 
Route::post('cadastros/via', 'ControladorVia@store');
Route::get('cadastros/via/editar/{idvias}', 'ControladorVia@edit');
Route::get('cadastros/via/apagar/{idvias}', 'ControladorVia@destroy');
Route::post('cadastros/via/{idvias}', 'ControladorVia@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('inicial/buscarVia', 'ControladorVia@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Contato
Route::post('inicial/contato/enviar', 'ControladorContato@enviaContato');
Route::get('inicial/contato', 'homeControlador@contato');