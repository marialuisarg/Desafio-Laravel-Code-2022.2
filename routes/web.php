<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth', 'verified'])->group(function () {

    // >>> insira suas rotas aqui !!!!! <<<

    Route::get('/', function () {
        return view('dashboard');
    })/*->middleware('auth')*/;
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })/*->middleware(['auth'])*/->name('dashboard');

    Route::get('/produtos/cadastro', function () {
        return view('produtos.cadastro');
    })/*->middleware(['auth'])*/->name('produtos.cadastro');

    // Route::get('/estoque', function () {
    //     return view('estoque.index');
    // })/*->middleware(['auth'])*/->name('estoque.index');

    Route::get('/estoque/cadastro', function () {
        return view('estoque.cadastro');
    })/*->middleware(['auth'])*/->name('estoque.cadastro');

    Route::get('/produto', function () {
        return view('produto.index');
    })/*->middleware(['auth'])*/->name('produto.index');

    Route::get('/produto/cadastro', function () {
        return view('produto.cadastro');
    })/*->middleware(['auth'])*/->name('produto.cadastro');

    Route::get('/usuarios/cadastro', function () {
        return view('usuarios.cadastro');
    })/*->middleware(['auth'])*/->name('usuarios.cadastro');
    
});

/* TESTES VIEWS */

Route::get('/inicio', function() {
    return view('index');
});

require __DIR__.'/auth.php';
