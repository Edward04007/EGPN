<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Inicio;
use App\Http\Controllers\Controller_Index;
use App\Http\Controllers\Controller_Painel;

/* Rotas para a página inicial */
Route::get("/",[Controller_Index::class, 'index'])->
name('entrar');
Route::post("/autenticar/usuario",[Controller_Index::class, 'logar'])->
name('logar');
Route::get("/sair",[Controller_Index::class, 'deslogar'])->
name('deslogar');

Route::middleware('session')->group(function(){

/* Rota para o inicio */
Route::get("/inicio",[Controller_Inicio::class, 'inicio'])->
name('inicio');
/* Rota para adicionar professor */
Route::post('/inicio/criar/professor', [Controller_Inicio::class, 'Adicionar_Professor'])->
name('Adicionar_professor');
/* Rota para adicionar disciplina */
Route::post('/inicio/criar/disciplina', [Controller_Inicio::class, 'Adicionar_disciplina'])->
name('Adicionar_disciplina');




/* Rotas para o painel disciplina */
Route::get("/painel/disciplina/{id}",[Controller_Painel::class, 'PainelDisciplina'])->
name('painelDisciplina');

/* Rota para atualizar  renomar disciplina */
Route::put('/painel/renomear/disciplina/{id}', [Controller_Painel::class, 'RenomearDisciplina'])->
name('RenomearDisciplina');

/* Rota para deletar disciplina */
Route::delete("/painel/delelar/disciplina/{id}", [Controller_Painel::class,'DeletarDisciplina'])->
name('deletarDisciplina');

/* Rota para criar assunto para disciplina */
Route::post('/painel/criar/conteudo', [Controller_Painel::class, 'CriarConteudo'])->
name('CriarConteudo');

/* Rota para criar questão para o assunto da disciplina */
Route::post('/painel/criar/questao',[Controller_Painel::class, 'CriarQuestoes'])->
name('salvarQuestao');

Route::get('/redirecionando/painel/criar/questao/{id}',[Controller_Painel::class, 'RedirectQuesteos'])->
name('redirect');

/* Rota para visualizar prova da disciplina */
Route::get('/painel/visualizar/conteudo/{id}', [Controller_Painel::class, 'ViewAssunto'])->
name('VisualizarAssunto');

/* Rota para visualizar prova da disciplina */
Route::get('/painel/visualizar/questoes/{id}', [Controller_Painel::class, 'ViewQuestoes'])->
name('VisualizarQuestoes');




/* Rotas para o painel professor */
Route::get("/painel/professor/{id}",[Controller_Painel::class, 'PainelProfessor'])->
name('painelProfessor');

/* Rota para atualizar foto */
Route::put('/painel/atualizar/foto/{id}', [Controller_Painel::class, 'AtualizarFoto'])->
name('AtualizarFoto');

/* Rota para atualizar nome */
Route::put('/painel/atualizar/nome/{id}', [Controller_Painel::class, 'RenomearProfessor'])->
name('RenomearProfessor');

/* Rota para atualizar senha */
Route::put('/painel/atualizar/senha/{id}', [Controller_Painel::class, 'AtualizarSenha'])->
name('AtualizarSenha');

/* Rota para deletar professor  */
Route::delete('/painel/deletar/professor/{id}', [Controller_Painel::class, 'DeletarProfessor'])->
name('deletarProfessor');
});
