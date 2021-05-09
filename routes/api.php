<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_ConsumirQuesteos;

/* Rotas para o painel disciplina */
Route::get("d", [Controller_ConsumirQuesteos::class, 'Disciplina']);
Route::get("a/{id}", [Controller_ConsumirQuesteos::class, 'Assunto']);
Route::get("q/{id}", [Controller_ConsumirQuesteos::class, 'Questeos']);

