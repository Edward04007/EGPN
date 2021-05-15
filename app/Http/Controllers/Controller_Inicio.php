<?php

namespace App\Http\Controllers;

use App\Models\Model_Usuario;
use App\Models\Model_Disciplina;
use App\Http\Requests\CheckFormProfessor;
use App\Http\Requests\CheckFormDisciplina;

class Controller_Inicio extends Controller
{
    public function inicio(){

        $disc = Model_Disciplina::all();
        $prof = Model_Usuario::select('pk_id','nome_usuario', 'fk_funcao')->get();

        return view('pages/inicio', compact('disc','prof'));
    }

    public function Adicionar_Professor(CheckFormProfessor $request){

        $password = hash('sha256', trim($request->password));

        Model_Usuario::
        create([
            'nome_usuario' => trim($request->username),
            'foto_usuario'=> trim($request->userFoto),
            'senha_usuario'=> $password,
            'fk_funcao'=> (int) '2'
            ]);

        return redirect()->route('inicio');
   }

   public function Adicionar_disciplina(CheckFormDisciplina $request){

        Model_Disciplina::
        create([
            'disciplina' => trim($request->disc)
            ]);

        return redirect()->route('inicio');
    }
}
