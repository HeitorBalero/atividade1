<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbdesenho;
use Illuminate\Support\Facades\Redirect;

class TbdesenhoController extends Controller
{
    //para mostrar tela de administrativa

    public function MostrarHome(){
        return view('homeadm');
    }

    public function MostrarCadastroDesenho(){
        return view('cadastrodesenho');
    }

    public function CadastrarDesenho(Request $request){
        $registros = $request->validate([
            'nomeDesenho'=>'string|required',
            'dataDesenho'=>'date|required',
            'generoDesenho'=>'string|required',
            'autorDesenho'=>'string|required'
        ]);

        Tbdesenho::create($registros);
        return Redirect::route('home-adm');
    }
}
