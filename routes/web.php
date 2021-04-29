<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Index;

Route::get("/",[Controller_Index::class, 'index'])->name('inicio');
Route::get("/feed",[Controller_Index::class, 'telaPrincipal'])->name('telaPrincipal');
