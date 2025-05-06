<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Models\Venda;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rotas do site  
|
*/

Route::get('/', function () {
    return view('index');
});

//CRUD PRODUTOS
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
    //CREATE
    Route::get('/cadastrarProduto', [ProdutoController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutoController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    //UPDATE 
    Route::get('/atualizarProduto/{id}', [ProdutoController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutoController::class, 'atualizarProduto'])->name('atualizar.produto');
    //DELETAR
    Route::delete('/delete', [ProdutoController::class, 'delete'])->name('produto.delete');
});

//CRUD CLIENTES 
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    //CREATE
    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    //UPDATE 
    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    //DELETAR
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
});

//CRUD VENDAS
Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index');
    //CREATE
    Route::get('/cadastrarVendas', [VendaController::class, 'cadastrarVendas'])->name('cadastrar.vendas');
    Route::post('/cadastrarVendas', [VendaController::class, 'cadastrarVendas'])->name('cadastrar.vendas');
});


