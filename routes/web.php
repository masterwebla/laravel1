<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nosotros','PaginasController@nosotros');
Route::get('/productos','PaginasController@productos');
Route::get('/servicios','PaginasController@servicios');
Route::get('/contacto','PaginasController@contacto');

//Rutas para el CRUD de Productos
Route::get('/listado-productos','ProductosController@listar')->name('listar');
Route::get('/crear-producto','ProductosController@crearProducto')->name('crear');
Route::post('/guardar-producto','ProductosController@guardarProducto')->name('guardar');
Route::get('/editar-producto/{id}','ProductosController@editarProducto')->name('editar');
Route::put('/actualizar-producto/{id}','ProductosController@actualizarProducto')->name('actualizar');