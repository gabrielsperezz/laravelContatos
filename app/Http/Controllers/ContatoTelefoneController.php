<?php

namespace contatos\Http\Controllers;

use contatos\ContatoTelefone;
use contatos\Http\Requests\ContatosTelefoneRequest;

class ContatoTelefoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function buscarTelefonesPorIdContato($idContato)
    {

        $telefones = [];

        foreach (ContatoTelefone::where("id_contato", $idContato)->get() as $telefone) {
            array_push($telefones, [
                $telefone->id,
                $telefone->tipo->descricao,
                $telefone->numero,
                '<td> 
                        <i data-id-telefone="' . $telefone->id . '" class="btn btn-success btn-sm fa fa-pencil editar_telefone"></i>
                        <i data-id-telefone="' . $telefone->id . '" class="btn btn-danger btn-sm fa fa-remove remover_telefone"></i>
                </td>'
            ]);
        }

        return response()->json(["data" => $telefones]);
    }


    public function inserir(ContatosTelefoneRequest $request){

        $contato = ContatoTelefone::create($request->all());

        return response()->json(["msg" => "Cadastrado com sucesso", "contato" => $contato]);
    }

    public function atualizar(ContatosTelefoneRequest $request, $id){

        $contato = ContatoTelefone::find($id);
        if(!empty($contato)) {
            $contato->update($request->all());
        }
        return response()->json(["msg" => "Cadastrado com sucesso", "contato" => $contato]);
    }


    public function remover($id){
        $contato = ContatoTelefone::find($id);
        $contato->delete();
        return response()->json(["msg" => "Deletado com sucesso"]);
    }

    public function listarTelefonePorId($id)
    {
        return ContatoTelefone::find($id);
    }


}
