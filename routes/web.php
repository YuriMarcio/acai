<?php

use App\Http\Controllers\dashDeliveryController;
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
        Route::get('/logged', 'logged')->name('login.logged')->name('dash.home');
        Route::get('/delivery', [dashDeliveryController::class, 'delivery'])->name('dash.delivery');
        Route::get('/pdv', [dashPdvController::class, 'pdv'])->name('dash.pdv');
        Route::get('/estoque', [dashEstoqueController::class, 'estoque'])->name('dash.estoque');
    });
});

