<?php

use App\Animal;

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

Route::get('/lista-animais', function () {
    $animais = Animal::orderBy('name', 'asc')->get();
    $dado = "Você tem dado em casa?";
    
    return view('listaAnimais', [ 'animais' => $animais, 'qualquer_dado' => $dado ]);
});

Route::get('/cadastro-animais', function () {
   
    return view('cadastroAnimais');
});

Route::resource('animais', 'AnimalController');

Auth::routes();

Route::get('/auth/login', 'HomeController@index')->name('home');
