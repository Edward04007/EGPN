<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Disciplina;
use App\Models\Model_Usuario;

class Controller_Painel extends Controller
{
    public function PainelDisciplina($id){

        $disc = Model_Disciplina::where('pk_id', $id)->get();

        return view('pages/painelDisciplina', compact('disc'));
    }

    public function RenomearDisciplina( Request $resuest, $id){

        Model_Disciplina::where('pk_id', $id)->
        update(['disciplina' => $resuest-> renome]);
        return back();
    }


    public function DeletarDisciplina(){

    }

    public function CriarConteudo(){

        return redirect()->route('questao');
    }

    public function CriarQuestoes(){
        return view('pages/criarQuestoes');
    }


    public function ViewAssunto(){

        return view('pages/viewAssunt');
    }

    public function ViewQuestoes(){

        return view('pages/viewQuestoes');
    }

    public function PainelProfessor($id){
        $prof = Model_Usuario::
        select('nome_usuario','pk_id')->
        where('pk_id', $id)->
        get();

        return view('pages/painelProfessor', compact('prof'));
    }
}
