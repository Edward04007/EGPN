<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Painel extends Controller
{
    public function painel(){

        return view('pages/painel');
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

    }
}
