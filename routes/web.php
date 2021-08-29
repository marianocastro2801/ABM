<?php

use Illuminate\Support\Facades\Route;
use App\clientes;
use App\User;






Route::get('/', 'HomeController@index')->name('inicio'); //importante!

Route::auth();  //importante!

//-------------------------HACIA ATRAS NO TOCAR: home login y register



//------------------------ CATEGORIAS



Route::resource('almacen/categoria','CategoriaController');
//--------------- FIN CATEGORIAS




//CRUD DE NOTAS
Route::get('/notas', 'PagesController@inicio')->name('inicio');
Route::get('/notas/{id}', 'PagesController@detalle')->name('notas.detalle');
Route::post('/notas', 'PagesController@crear')->name('notas.crear');
Route::get('/notas/editar/{id}', 'PagesController@editar')->name('notas.editar');
Route::put('/notas/editar/{id}', 'PagesController@update')->name('notas.update');
Route::delete('/notas/eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

//home
//Route::get('/', 'ClienteController@inicio')->name('inicio');
Route::get('/home', 'HomeController@index')->name('inicio');

//CRUD DE CLIENTES
//hacer el verPerfil
Route::get('/clientes', 'ClienteController@inicio')->name('inicio');
Route::get('/clientes/{id}', 'ClienteController@verPerfil')->name('clientes.verPerfil');
Route::get('/clientes/{id}', 'ClienteController@detalle')->name('clientes.detalle');
Route::post('/crear', 'ClienteController@insert')->name('clientes.insert');

Route::get('/crear', 'ClienteController@crear')->name('clientes.crear');

Route::get('/clientes/editar/{id}', 'ClienteController@editar')->name('clientes.editar');
Route::put('/clientes/editar/{id}', 'ClienteController@update')->name('clientes.update');
Route::delete('/clientes/eliminar/{id}', 'ClienteController@eliminar')->name('clientes.eliminar');


Route::get('/publicaciones', 'ClienteController@publicaciones')->name('clientes.publicaciones');

   










