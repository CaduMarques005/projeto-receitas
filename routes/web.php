<?php

use App\Http\Controllers\ReceitasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/receitas');
});
Route::get('/receitas', [ReceitasController::class, 'receitasApi']);
Route::get('/receitas/{id}', [ReceitasController::class, 'mostrarReceita']);
Route::get('/receitas/tipo/{tipo}', [ReceitasController::class, 'tipoReceita']);
