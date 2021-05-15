<?php

namespace App\Http\Controllers;

use App\Models\Model_Usuario;
use App\Http\Requests\CheckFormLogin;

class Controller_Index extends Controller
{
    public function index(){

        if(session()->has('UsuarioLogado')){

            return redirect()->route('inicio');
        }else{
            return view('pages/index');
        }

    }

    public function logar(CheckFormLogin $request){

        $User = trim($request->username);
        $password = hash('sha256', trim($request->password));
        $InforUser = Model_Usuario::where('nome_usuario', $User)->first();

        if($InforUser){
            if($InforUser->senha_usuario == $password){

                $request->session()->put('id', trim($InforUser->pk_id));
                $request->session()->put('foto', trim($InforUser->foto_usuario));
                $request->session()->put('UsuarioLogado', trim($InforUser->nome_usuario));
                $request->session()->put('fk', trim($InforUser->fk_funcao));

                return redirect()->route('inicio');
            }else{

                return redirect()->route('entrar');
            }
        }else{

            return redirect()->route('entrar');
        }
    }

    public function deslogar(){

        session()->pull('UsuarioLogado');
        return view('pages/index');
    }
}
