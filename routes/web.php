<?php

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
    // return view('welcome');
    echo '<h1>Hello World!!</h1>';
});
