<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/olamundo/{nome}', [
    'middleware' => 'auth',
    'uses' => 'TesteController@index'
]);


Route::get('/blog/index', "BlogController@index");
Route::post('/blog/adicionar', "BlogController@adicionar");
Route::post('/blog/remover/{id}', "BlogController@remover");

Route::get('/auth/login','Auth\AuthController@logar');
Route::get('/auth/logout', function () {
    Auth::logout();
    return  redirect('/');
});
//Route::get('/auth/logout', 'Auth\AuthController@sair');
Route::get('/auth/index',  'Auth\AuthController@index');
Route::get('/auth/register', 'Auth\AuthController@registrar');
Route::post('auth/register', 'Auth\AuthController@create');
Route::post('auth/login' , 'Auth\AuthController@acessar');

