<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Assunto;
use App\Models\Model_Usuario;
use App\Models\Model_Disciplina;
use App\Models\Model_Alternativa;

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


    public function DeletarDisciplina($id){

        if($del = Model_Disciplina::find($id)){
            $del->delete();
            return redirect()->route('inicio');
        }else{
            return back();
        }
    }

    public function CriarConteudo(Request $request){

        Model_Assunto::create([
            'fk_disciplina' => trim($request->id),
            'assunto' => trim($request->assunto)
        ]);
        return redirect()->route('redirect', trim($request->id));
    }

    public function RedirectQuesteos(Request $request, $id){

        $var_id = Model_Assunto::select(
            'pk_id',
             'fk_disciplina'
             )->
        where('fk_disciplina', (int) $id)->
        get();

        return view('pages/criarQuestoes', compact('var_id'));
    }

    public function CriarQuestoes(Request $request){

        Model_Alternativa::create([
            'fk_assunto' => (int) trim($request->fk_assunto),
            'alternativa_a' => trim($request->alternativa_a),
            'alternativa_b' => trim($request->alternativa_b),
            'alternativa_c' => trim($request->alternativa_c),
            'alternativa_d' => trim($request->alternativa_d),
            'alternativa_e' => trim($request->alternativa_e),
            'gabarito' => trim($request->gabarito),
            'questao' => trim($request->questao)
        ]);

        return redirect()->route('redirect', trim($request->fk_disciplina));

    }

    public function ViewAssunto($id){

        $var_id = Model_Assunto::select(
            'pk_id','fk_disciplina',
             'assunto'
             )->
        where('fk_disciplina', $id)->
        simplePaginate(1);

        return view('pages/viewAssunto', compact('var_id'));
    }

    public function ViewQuestoes($id){

        $var_id = Model_Alternativa::
        join('TB_ASSUNTO','TB_ASSUNTO.pk_id','TB_ALTERNATIVA.fk_assunto')->
        select(
            'TB_ALTERNATIVA.pk_id',
            'TB_ALTERNATIVA.fk_assunto',
            'TB_ALTERNATIVA.questao',
            'TB_ALTERNATIVA.alternativa_a',
            'TB_ALTERNATIVA.alternativa_b',
            'TB_ALTERNATIVA.alternativa_c',
            'TB_ALTERNATIVA.alternativa_d',
            'TB_ALTERNATIVA.alternativa_e',
            'TB_ALTERNATIVA.gabarito',
            'TB_ASSUNTO.fk_disciplina'
            )->
        where('fk_assunto', $id)->
        simplePaginate(1);

        return view('pages/viewQuestoes', compact('var_id'));
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
            'nome_usuario' => trim($request-> userProf)
            ]);
        return back();
    }

    public function AtualizarFoto(Request $request, $id){

        Model_Usuario::where('pk_id', $id)->
        update([
            'foto_usuario' => trim($request-> userFoto)
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
