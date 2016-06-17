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
//    return view('welcome');
    return view('home');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('/blog/index', "BlogController@index");
Route::post('/blog/adicionar', "BlogController@adicionar");
Route::post('/blog/remover/{id}', "BlogController@remover");

Route::get('/auth/login', function () {
    return view('auth.login');
});
Route::get('/auth/logout', function () {
    Auth::logout();
    return  redirect('/');
});
Route::get('/auth/index',  'Auth\AuthController@index');
Route::post('auth/register', 'Auth\AuthController@create');
//Route::post('auth/login' , 'Auth\AuthController@autentica');
Route::post('auth/login' , function (App\Http\Requests\UserRequest $request) {
    $data = $request->all();
    $user = App\User::findByEmail($data['email']);
    Auth::login($user);


    return  redirect('/');

});


//Route::get('/olamundo/{nome}', "TesteController@index");
Route::get('/olamundo/{nome}', [
    'middleware' => 'auth',
    'uses' => 'TesteController@index'
]);
