<?php

use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use GuzzleHttp\Psr7\Request;
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


Route::get('/', [ProdutoController::class, 'index'])->name('indexproduto');

Route::post('/produto/store', [ProdutoController::class, 'store'])->name('storeproduto');

Route::get('/ver-produto/{id}',[ProdutoController::class, 'show'])->name('viewproduto');

Route::get('/editar-produto/{id}',[ProdutoController::class, 'edit'])->name('editarproduto');

Route::post('/editar-produto/{id}', [ProdutoController::class, 'update'])->name('editarproduto');

Route::get('/excluir-produto/{id}', [ProdutoController::class, 'destroy'])->name('excluirproduto');
