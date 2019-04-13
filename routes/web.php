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

Route::get('/', 'PagesController@index');
Route::get('/actualités', 'PagesController@news');
Route::get('/actualités/1', 'PagesController@post');
Route::get('/service-traiteur', 'PagesController@service');
Route::get('/à-propos', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
