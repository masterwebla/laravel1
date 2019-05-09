<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nosotros','PaginasController@nosotros');
Route::get('/productos','PaginasController@productos');
Route::get('/servicios','PaginasController@servicios');
Route::get('/contacto','PaginasController@contacto');

