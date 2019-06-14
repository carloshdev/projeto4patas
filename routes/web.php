<?php
use Illuminate\Support\Facades\Auth;
use Projeto4Patas\Animal;
use Projeto4Patas\Servico;
use Projeto4Patas\Http\Middleware\CheckTipoUsuario;

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
//------------------------------------------------------------------------------------
// AUTH ------------------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {

    //rotas de serviços que requerem autenticação
    Route::get('/cadastro-servicos', function () {
        return view('cadastroServicos');
    })->name('cadastro-servicos')->middleware('gerencial');

    Route::resource('servicos', 'ServicoController');

    //rotas de animais que requerem autenticaçao
    Route::get('/cadastro-animais', function () {
        return view('cadastroAnimais');
    })->name('cadastro-animais');

    Route::get('/{$id}/editar-animal', function ($id) {
        $animal = Animal::findOrFail($id);
        return view('editarAnimal', compact($animal));
    })->name('editar-animal');

    Route::resource('animais', 'AnimalController');

    // HOME ---------------------------------------------------------------------------
    Route::get('/home', function () {
        return view('home')/*->middleware('gerencial')*/;
});

});

Auth::routes();


//------------------------------------------------------------------------------------
// PUBLIC-----------------------------------------------------------------------------

Route::get('/lista-animais', function () {
    $animais = Animal::orderBy('name', 'asc')->get();    
    return view('listaAnimais', [ 'animais' => $animais ]);
}) ->name('listar-animais')/*->middleware('gerencial')*/;

Route::get('/lista-servicos', function () {
    $servicos = Servico::orderBy('nome', 'asc')->get();
    return view('listaServicos', [ 'servicos' => $servicos ]);
}) ->name('listar-servicos')/*->middleware('gerencial')*/;

//-------------------------------------------------------------------------------------
// MAPA ---------------------------------------------------------------------------
Route::get('/local-mapa', function () {  
    return view('mapaOng');
})->name('local-mapa')/*->middleware('gerencial')*/;

Route::get('/doacao', function () {  
    return view('doacao');
})->name('doacao')/*->middleware('gerencial')*/;

Route::get('/auth/login', 'HomeController@index')->name('home');

// INDEX ---------------------------------------------------------------------------
Route::get('/', function () {
    return view('auth.login');
});
