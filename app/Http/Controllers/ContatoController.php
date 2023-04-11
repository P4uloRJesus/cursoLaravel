<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

     
    public function index()
    {
        
        $contatos =[
            (object)["nome"=>"Maria", "tel"=>"619980554"],
            
            (object)["nome"=>"Pedro", "tel"=>"619859039"]

        ];

        $contato = new Contato();
        $con = $contato->lista();
        /* dd($con); */

        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req)
    {
       /*  dd($req->all()); */
        
        return "Esse é o Criar do Contato Controller";
    }
    public function editar()
    {
        return "Esse é o Editar do Contato Controller";
    }
}
