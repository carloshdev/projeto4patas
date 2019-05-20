<?php

use App\Animal;
use App\Servico;
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
    $dado = "Teste Animais";
    
    return view('listaAnimais', [ 'animais' => $animais, 'qualquer_dado' => $dado ]);
}) ->name('listar-animais');

Route::get('/cadastro-animais', function () {
      
    return view('cadastroAnimais');
})->name('cadastro-animais');

Route::resource('animais', 'AnimalController');

Route::get('/cadastro-servicos', function () {
      
    return view('cadastroServicos');
})->name('cadastro-servicos');

Route::get('/lista-servicos', function () {
    $servicos = Servico::orderBy('nome', 'asc')->get();
    $dado = "Teste Serviços";
    
    return view('listaServicos', [ 'servicos' => $servicos, 'qualquer_dado' => $dado ]);
}) ->name('listar-servicos');

Route::resource('servicos', 'ServicosController');

Route::get('/local-mapa', function () {
      
    return view('mapaOng');
})->name('local-mapa');

Auth::routes();

Route::get('/auth/login', 'HomeController@index')->name('home');
