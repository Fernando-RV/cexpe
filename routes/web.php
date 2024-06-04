<?php

Route::view('/','home')->name('home');
Route::view('programas','programas')->name('programas');
//Colocar la ruta completa para la version 8 en adelante
#Route::get('servicios','App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');
Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');