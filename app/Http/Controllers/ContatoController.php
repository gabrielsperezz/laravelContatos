<?php

namespace contatos\Http\Controllers;

use contatos\ContatoTelefone;
use contatos\Http\Requests\ContatosRequest;
use contatos\Contato;
use contatos\TipoTelefone;
use Illuminate\Support\Facades\Request;

class ContatoController extends Controller
{

    public function __construct()
    {

    }

    public function listarContatos(){
        $contatos = Contato::all();
        return view('contatos.listagem')->with('contatos', $contatos);
    }

    public function listarPorId($id){
        $contato = Contato::find($id);
        if(empty($contato)) {
            return "Esse contato não existe";
        }

        $telefones = ContatoTelefone::where("id_contato", $id)->get();

        $params = [
            "tipos_telefones" => TipoTelefone::all(),
            "telefones" => $telefones,
            "contato" => $contato
        ];

        return view('contatos.formulario')->with($params);
    }

    public function novo(){
        $contato = new \StdClass();

        $params = [
            "tipos_telefones" => TipoTelefone::all(),
            "telefones" => [],
            "contato" => $contato
        ];

        return view('contatos.formulario')->with($params);
    }

    public function inserir(ContatosRequest $request){

        $contato = Contato::create($request->all());

        return response()->json(["msg" => "Cadastrado com sucesso", "contato" => $contato]);
    }

    public function atualizar(ContatosRequest $request, $id){

        $contato = Contato::find($id);
        if(!empty($contato)) {
            $contato->update($request->all());
        }
        return response()->json(["msg" => "Cadastrado com sucesso", "contato" => $contato]);
    }


    public function remover($id){
        $contato = Contato::find($id);
        $contato->delete();
        return response()->json(["msg" => "Deletado com sucesso"]);
    }

}
