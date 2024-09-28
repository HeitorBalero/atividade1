<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesenhoController;

//Esta rota serve para abrir a home
Route::get('/',[DesenhoController::class,'mostrarhome'])->name('mostrar-home');
//Estas rotas são para manipular os registros da desenho
Route::get('/gerencia-desenho', [DesenhoController::class,'gerenciardesenho'])->name('gerenciar-desenho');
Route::get('/altera-desenho/{id}', [DesenhoController::class,'mostrardesenhoId'])->name('mostrar-desenho-id');
Route::get('/salvar-desenho', [DesenhoController::class,'ShowDesenho'])->name('mostrar-desenho');
Route::post('/salvar-desenho',[DesenhoController::class,'SalvarContato'])->name('cadastrar-desenho');
