<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Desenhos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DesenhosController extends Controller
{
    //

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
            'localDesenho'=>'string|required',
            'imgDesenho'=>'string|required'
        ]);
    
    Desenhos::create($registros);
    return Redirect::route('home-adm');
    }

}