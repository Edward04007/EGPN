<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_Usuario;

class Controller_Index extends Controller
{
    public function index(){

        if(session()->has('UsuarioLogado')){

            return redirect()->route('feed');
        }else{
            return view('pages/index');
        }

    }

    public function logar(Request $request){

        $User = trim($request->username);
        $password = hash('sha256', trim($request->password));
        $InforUser = Model_Usuario::
            where('nome_usuario', $User)->first();

       if(trim($InforUser->nome_usuario) == $User){

            $InforUser = Model_Usuario::
                where('senha_usuario', $password)->first();
        if($InforUser->senha_usuario == $password){

            $InforUser = Model_Usuario::
                where('senha_usuario', $password)->
                where('nome_usuario', $User)->first();

            if(trim($InforUser->nome_usuario) == $User and $InforUser->senha_usuario == $password ){

                $request->session()->put('id', trim($InforUser->pk_id));
                $request->session()->put('foto', trim($InforUser->foto_usuario));
                $request->session()->put('UsuarioLogado', trim($InforUser->nome_usuario));

                return redirect()->route('feed');
            }else{

                return back();
            }
        }else{

            return back();
        }
       }else{

            return back();
       }
    }

    public function deslogar(){

        session()->pull('UsuarioLogado');
        return view('pages/index');
    }
}
