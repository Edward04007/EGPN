<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Disciplina;

class Controller_Inicio extends Controller
{
    public function inicio(){

        $disc = Model_Disciplina::all();

        return view('pages/inicio', compact('disc'));
    }

    public function CreateDisci(Request $request){
        $disc = Model_Disciplina::create(['disciplina' => trim($request->disc)]);

        return redirect()->route('inicio');
   }
}
