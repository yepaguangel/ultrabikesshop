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

Route::get('admin/principal', function(){
	return view('admin.index');
});

Route::resource('admin/file', 'FilesController');
Route::post('admin/file/upload', ['as'=>'file.upload','uses'=>'FilesController@upload']);

Route::resource('admin/producto', 'ProductoController');
Route::resource('admin/galeriaimg', 'UploadimageController');

Route::get('admin/producto/filtro/{idcategoria}', 'ProductoController@filtro');

Route::resource('admin/categoria', 'CategoriaController');	

Route::get('detalleproducto', function () {
	$usuarioList = Usuario::where('nip','123')->first();
	echo $usuarioList->nip;
	//print_r($usuarioList);
	//dd($usuarioList);
});


Route::get('/', function(){ return view('oops'); });


Route::get('detalleproducto/{id}','FrontController@detalleproducto');
Route::get('ofertas','FrontController@ofertas');
Route::get('conocenos','FrontController@conocenos');
Route::get('contactenos','FrontController@contactenos');
Route::get('micuenta','FrontController@micuenta');
Route::get('login','FrontController@login');
Route::get('carrito','FrontController@carrito');
Route::get('registro','FrontController@registro');

Route::resource('carritoagregar/{id}', 'CarritoController@agregar');
 	
Route::get('logerrors', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');