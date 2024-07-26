<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/* Rota principal da aplicação - quando não for informada nenhuma rota, essa rota será executada */
Route::get('/', [PrincipalController::class, 'principal']);
// PrincipalController - no do controlador
// principal - nome do método que será executado quando a rota for acessada

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos']);

Route::get('/contato/{nome}/{assunto?}', function(string $nome, string $assunto = 'Assunto padrão'){
    echo "Estamos aqui: ".$nome." - ".$assunto;
});