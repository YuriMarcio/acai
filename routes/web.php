<?php

use App\Http\Controllers\dashDeliveryController;
use App\Http\Controllers\dashEstoqueController;
use App\Http\Controllers\dashPdvController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\logAcessoMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DeliveryController::class, 'delivery']);

Route::prefix('dash')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
    Route::middleware('autenticacao')->group(function () {
        Route::get('/logged', 'logged')->name('login.logged');
        Route::get('/delivery', [dashDeliveryController::class, 'delivery'])->name('dash.delivery');
        Route::get('/pdv', [dashPdvController::class, 'pdv'])->name('dash.pdv');

        Route::controller(dashEstoqueController::class)->group(function(){
            Route::get('/estoque', [dashEstoqueController::class, 'estoque'])->name('dash.estoque');
            Route::delete('/estoque/excluir-categoria/{id}', [dashEstoqueController::class, 'excluirCate'])->name('excluir.categorie');
            Route::delete('/produto/excluir-produto/{id}', [dashEstoqueController::class, 'excluirProd'])->name('excluir.Prod');
            Route::post('/cadscategorie', [dashEstoqueController::class, 'cadscategorie'])->name('cad.categorie');
            Route::post('/cadasProduto', [dashEstoqueController::class, 'cadProd'])->name('cad.product');
            Route::put('/editProd/{id}', [dashEstoqueController::class, 'editProd'])->name('edit.product');
        });


    });
});

