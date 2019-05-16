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
Route::delete('/borrar-producto/{id}','ProductosController@eliminarProducto')->name('eliminar');

//Rutas para el CRUD de Servicios
Route::resource('/servicios','ServiciosController');
//Route::get('/servicios','ServiciosController@index')->name('servicios.index');
//Route::get('/servicios/create','ServiciosController@create')->name('servicios.create');
//Route::get('/servicios/{id}/show','ServiciosController@show')->name('servicios.show');
//Route::post('/servicios','ServiciosController@store')->name('servicios.store');
//Route::get('/servicios/{id}/edit','ServiciosController@edit')->name('servicios.edit');
//Route::put('/servicios/{id}/edit','ServiciosController@update')->name('servicios.update');
//Route::delete('/servicios/{id}','ServiciosController@destroy')->name('servicios.destroy');