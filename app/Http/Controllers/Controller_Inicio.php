<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Disciplina;
use App\Models\Model_Usuario;
class Controller_Inicio extends Controller
{
    public function inicio(){

        $disc = Model_Disciplina::all();
        $prof = Model_Usuario::select('pk_id','nome_usuario')->get();

        return view('pages/inicio', compact('disc','prof'));
    }

    public function Adicionar(Request $request){

        if($request->disc){
            $disc = Model_Disciplina::
            create([
                'disciplina' => trim($request->disc)
                ]);
            return redirect()->route('inicio');
        }else{

            $password = hash('sha256', trim($request->userSenha));

            $prof = Model_Usuario::
            create([
                'nome_usuario' => trim($request->userProf),
                'foto_usuario'=> trim($request->userFoto),
                'senha_usuario'=> $password,
                'fk_funcao'=> (int) '2'
                ]);
            return redirect()->route('inicio');
        }

   }
}
