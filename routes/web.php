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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(["prefix" => "painel/admin",'middleware' => 'auth'],function (){

    Route::get('/',function(){ return view("admin.painel"); });

    Route::get("/assistidos",'Admin\AssistidosController@index')->name("assistidos.index");
    Route::get("/assistidos/create",'Admin\AssistidosController@create')->name("assistidos.create");
    Route::post("/assistidos/create",'Admin\AssistidosController@store')->name("assistidos.store");
    Route::post("/assistidos",'Admin\AssistidosController@search')->name("assistidos.search");
    Route::get("/assistidos/show/{id}",'Admin\AssistidosController@show')->name("assistidos.show");

});
