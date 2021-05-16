<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_ConsumirQuesteos;

/* Rotas para listar todas as  disciplina */
Route::get("d", [Controller_ConsumirQuesteos::class, 'Disciplina']);

/* Rotas para listar todos os assuntos */
Route::get("a/{id}", [Controller_ConsumirQuesteos::class, 'Assunto']);

/* Rotas para listar todas as questões */
Route::get("q/{id}", [Controller_ConsumirQuesteos::class, 'Questeos']);

/* Rotas para listar todas as questões */
Route::get("g/{id}", [Controller_ConsumirQuesteos::class, 'Gabarito']);
