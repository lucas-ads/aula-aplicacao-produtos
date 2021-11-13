<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProdutoController;

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

Route::get('/', [AdminProdutoController::class, 'index'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/produtos',[AdminProdutoController::class, 'list'])
    ->middleware(['auth','admin'])->name('list-produtos');

Route::get('/produtos/novo',[AdminProdutoController::class, 'create'])
    ->middleware(['auth','admin'])->name('create-produto');

Route::post('/produtos',[AdminProdutoController::class, 'store'])
    ->middleware(['auth','admin'])->name('store-produto');

require __DIR__.'/auth.php';
