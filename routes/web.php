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

use yepagu\User;
use yepagu\Producto;

/*Route::get('/', function(){
	return view('index');
});*/



Route::resource('/admin/login', 'LoginController');
Route::get('admin/principal', 'PrincipalController@index');
Route::resource('admin/file', 'FilesController');
Route::post('admin/file/upload', ['as'=>'file.upload','uses'=>'FilesController@upload']);

Route::resource('admin/producto', 'ProductoController');
Route::get('admin/producto/delete/{id}', ['as' => 'producto.delete', 'uses' => 'ProductoController@destroy']);
Route::resource('admin/flete', 'FleteController');
Route::resource('admin/galeriaimg', 'UploadimageController');
Route::post("admin/galeriaimg/autocompletar/{texto}", 'UploadimageController@autocomplete');

Route::get('admin/producto/filtro/{idcategoria}', 'ProductoController@filtro');

Route::resource('admin/categoria', 'CategoriaController');	

//Route::get('/', function(){ return view('oops'); });
Route::get('/', function(){ return view('oops'); });
Route::get('indexreal', 'FrontController@index');
Route::get('detalleproducto/{id}/{nombre}','FrontController@detalleproducto');
Route::get('ofertas','FrontController@ofertas');
Route::get('indexdemo','FrontController@indexdemo');
Route::get('conocenos','FrontController@conocenos');
Route::get('contactenos','FrontController@contactenos');
Route::get('micuenta','FrontController@micuenta');
Route::get('login','FrontController@login');
Route::get('registro','FrontController@registro');
 	
Route::get('logerrors', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('carrito', 'CartController@show');
Route::get('carrito/add/{id}/{cant}', 'CartController@add');
Route::get('carrito/delete', 'CartController@destroy');