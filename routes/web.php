<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Index;
use App\Http\Controllers\Controller_Feed;
use App\Http\Controllers\Controller_Painel;

/* Rotas para a página inicial */
Route::get("/",[Controller_Index::class, 'index'])->name('inicio');
Route::post("/auth",[Controller_Index::class, 'logar'])->name('logar');

Route::middleware('session')->group(function(){

    /* Rota para o feed */
Route::get("/feed",[Controller_Feed::class, 'feed'])->name('feed');

/* Rotas para o painel */
Route::get("/painel/disciplina/{id}",[Controller_Painel::class, 'painel'])->name('painel');

Route::delete("/painel/delelar/disciplina/{id}", [Controller_Painel::class,'delete'])->name('deletarDisciplina');

Route::post('/painel/criar/conteudo', [Controller_Painel::class, 'ContentProva'])->name('ConteudoProva');

Route::get('/painel/criar/questao',[Controller_Painel::class, 'CreateQuestion'])->name('questao');

Route::post('/painel/criar/questao',[Controller_Painel::class, 'CreateQuestion'])->name('salvarQuestao');

Route::get('/painel/visualizar/prova', [Controller_Painel::class, 'ViewProva'])->name('VisualizarProva');
});
