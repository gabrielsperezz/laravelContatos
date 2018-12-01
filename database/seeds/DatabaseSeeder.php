<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use contatos\TipoTelefone;
use contatos\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('InserirTiposTelefone');
        $this->call('InserirLogin');
	}

}

class InserirTiposTelefone extends Seeder {

    public function run()
    {
        TipoTelefone::create(['descricao' => 'Residencial']);
        TipoTelefone::create(['descricao' => 'Comercial']);
        TipoTelefone::create(['descricao' => 'Celular']);
    }
}


class InserirLogin extends Seeder {

    public function run()
    {
        User::create(['name' => 'Gabriel Perez', "email" => "gabriel.perez0706@icloud.com", "password" => "$2y$10\$YGH872/29tpvNN7QIyk7s.mnhrycaSmGr3x4U7AoMdEzI.CBH7YA6"]);
    }
}