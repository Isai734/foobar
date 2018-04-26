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
    return view('index');
});

Route::get('register','AddPersonaController@insertform');

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('insert','StudentControler@insertform');

Route::post('create','StudentControler@insert');

Route::get('blade', function () {
    return view('page',array('name' => 'Virat Gandhi'));
});

Route::get('view-records','StudentControler@index');