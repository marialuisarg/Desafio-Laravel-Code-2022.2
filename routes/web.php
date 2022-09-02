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

    Route::get('/produtos', function () {
        return view('produtos');
    })/*->middleware(['auth'])*/->name('produtos');

    Route::get('/produtos/cadastro', function () {
        return view('cadastro-produtos');
    })/*->middleware(['auth'])*/->name('produtos/cadastro');
    
});

/* TESTES VIEWS */

Route::get('/inicio', function() {
    return view('index');
});

require __DIR__.'/auth.php';
