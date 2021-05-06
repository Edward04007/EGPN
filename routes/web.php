<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Feed;
use App\Http\Controllers\Controller_Index;
use App\Http\Controllers\Controller_Painel;

/* Rotas para a página inicial */
Route::get("/",[Controller_Index::class, 'index'])->name('inicio');
Route::post("/auth",[Controller_Index::class, 'logar'])->name('logar');
Route::get("/sair",[Controller_Index::class, 'deslogar'])->name('deslogar');

Route::middleware('session')->group(function(){

/* Rota para o feed */
Route::get("/feed",[Controller_Feed::class, 'feed'])->name('feed');
/* Rota para adicionar disciplina */
Route::post('/feed/criar/disciplina', [Controller_Feed::class, 'CreateDisci'])->name('CriarDisciplina');




/* Rotas para o painel disciplina */
Route::get("/painel/disciplina/{id}",[Controller_Painel::class, 'painel_disc'])->name('painelDisciplina');

/* Rota para deletar disciplina */
Route::delete("/painel/delelar/disciplina/{id}", [Controller_Painel::class,'delete'])->name('deletarDisciplina');

/* Rota para criar assunto para disciplina */
Route::post('/painel/criar/conteudo', [Controller_Painel::class, 'ContentProva'])->name('ConteudoProva');

/* Rota para atualizar  renomar disciplina */
Route::put('/painel/renomear/disciplina/{id}', [Controller_Painel::class, 'RenomeDisci'])->name('RenomearDisciplina');

/* Rota para criar questão para o assunto da disciplina */
Route::get('/painel/criar/questao',[Controller_Painel::class, 'CreateQuestion'])->name('questao');

/* Rota para criar questão para o assunto da disciplina */
Route::post('/painel/criar/questao',[Controller_Painel::class, 'CreateQuestion'])->name('salvarQuestao');

/* Rota para visualizar prova da disciplina */
Route::get('/painel/visualizar/prova', [Controller_Painel::class, 'ViewProva'])->name('VisualizarProva');



/* Rotas para o painel professor */
Route::get("/painel/professor/{id}",[Controller_Painel::class, 'painel_prof'])->name('painelProfessor');
});
