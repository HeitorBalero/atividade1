<?php

use App\Http\Controllers\TbdesenhoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TbdesenhoController::class,'MostrarHome'])->name('home-adm');
Route::get('/cadastro-desenho',[TbdesenhoController::class,'MostrarCadastroDesenho'])->name('show-cadastro-desenho');

Route::post('/cadastro-desenho',[TbdesenhoController::class, 'CadastrarDesenho'])->name('cadastra-desenho');
