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

    public function RenomearDisciplina( Request $request, $id){

        Model_Disciplina::where('pk_id', $id)->
        update([
            'disciplina' => $request-> renome
            ]);
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
        select('nome_usuario','pk_id','foto_usuario')->
        where('pk_id', $id)->
        get();

        return view('pages/painelProfessor', compact('prof'));
    }

    public function RenomearProfessor(Request $request, $id){

        Model_Usuario::where('pk_id', $id)->
        update([
            'nome_usuario' => $request-> userProf
            ]);
        return back();
    }

    public function AtualizarFoto(Request $request, $id){

        Model_Usuario::where('pk_id', $id)->
        update([
            'foto_usuario' => $request-> userFoto
            ]);
        return back();
    }

    public function AtualizarSenha(Request $request, $id){


        $new_password = hash('sha256', trim($request->userSenha));

        Model_Usuario::where('pk_id', $id)->
        update([
            'senha_usuario' => $new_password
            ]);
        return back();
    }

    public function DeletarProfessor($id){

        if($del = Model_Usuario::find($id)){
            $del->delete();
            return redirect()->route('inicio');
        }else{
            return back();
        }
    }
}
