<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ContactController@index');
Route::post('/send', 'ContactController@send');
Route::get('/received/{id}', 'ContactController@received');
Route::get('/mail/{id}', 'ContactController@mail');



