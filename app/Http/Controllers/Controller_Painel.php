<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Disciplina;

class Controller_Painel extends Controller
{
    public function painel_disc($id){

        $disc = Model_Disciplina::where('pk_id', $id)->get();

      
        return view('pages/painel_disc', compact('disc'));
    }

    public function delete(){

    }

    public function ContentProva(){

        return redirect()->route('questao');
    }

    public function CreateQuestion(){
        return view('pages/CriarQuestoes');
    }


    public function ViewProva(){

        return view('pages/viewAssunt');
    }

    public function painel_prof(){
        return view('pages/painel_prof');
    }
}
