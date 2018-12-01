<?php namespace contatos\Http\Controllers;

use contatos\Contato;
use contatos\ContatoTelefone;
use contatos\TipoTelefone;
use contatos\User;

class HomeController extends Controller {

	public function __construct()
	{
        $this->middleware('auth');
	}

	public function home()
	{
        $params =  [
            "total_telefone_contatos" => count(ContatoTelefone::all(["id"])),
            "total_contatos" =>  count(Contato::all(["id"])),
            "total_logins" => count(User::all(["id"])),
            "total_tipo" => count(TipoTelefone::all(["id"]))
        ];

		return view('home')->with($params);
	}

}
