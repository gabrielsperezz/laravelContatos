<?php

namespace contatos\Http\Controllers;

use contatos\Http\Requests\ContatosRequest;
use contatos\Contato;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ContatoController extends Controller
{

    public function __construct()
    {

    }

    public function lista(){

        $contatos = Contato::all();

        return view('contatos.listagem')->with('contatos', $contatos);
    }

    public function mostra($id){
        $contato = Contato::find($id);
        if(empty($contato)) {
            return "Esse contato não existe";
        }
        return view('contato.detalhes')->with('c', $contato);
    }

    public function novo(){
        return view('contato.formulario');
    }

    public function adiciona(ContatosRequest $request){

        Contato::create($request->all());

        return redirect()
            ->action('ContatoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function remove($id){
        $contato = Contato::find($id);
        $contato->delete();
        return redirect()
            ->action('ContatoController@lista');
    }

    public function listaJson(){
        $contatos = Contato::all();
        return response()->json($contatos);
    }

}
