<?php

use App\Http\Controllers\MovimentoController;
use Illuminate\Support\Facades\Route;

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

/* As rotas definem que recurso será carregado 
 quando uma URL for digitad. pode carregar
 um Controller ou uma View.Quando uma URL
 precissar carregar dados do BD a rota deve 
 carregar um CONTROLLER */

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[MovimentoController::class, 'read'])->name('dashboard');

    Route::get('/nova_entrada', function () {
        return view('nova_entrada');
    })->name('nova_entrada');

    Route::post('/store',[MovimentoController::class, 'store'])->name('store');
    
    //parametros de rota se indentifica com {}
    Route::get('/form_update/{id}',[MovimentoController::class, 'form_update'])->name('form_update');

    
});
