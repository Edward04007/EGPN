<?php

namespace App\Http\Controllers;

use App\Http\Resources\Resource_Assunto;
use App\Http\Resources\Resource_Disciplina;
use App\Models\Model_Alternativa;
use App\Models\Model_Assunto;
use App\Models\Model_Disciplina;


class Controller_ConsumirQuesteos extends Controller
{

    public function Disciplina(){

       $disc = Model_Disciplina::all();
        return Resource_Disciplina::collection($disc);
    }

   public function Assunto($id){

        $ass = Model_Assunto::all()->
        where('fk_disciplina', $id);
        return Resource_Assunto::collection($ass);
   }

   public function Questeos($id){

    return Model_Alternativa::first()->
        where('fk_assunto', $id)->
        paginate(1);

    }
}
