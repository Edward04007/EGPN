<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Disciplina;

class Controller_Feed extends Controller
{
    public function feed(){

        $disc = Model_Disciplina::all();

        return view('pages/feed', compact('disc'));
    }

    public function CreateDisci(Request $request){
        $disc = Model_Disciplina::create(['disciplina' => trim($request->disc)]);

        return redirect()->route('feed');
   }
}
