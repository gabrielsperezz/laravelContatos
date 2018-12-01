<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTelefoneTable extends Migration {

	public function up()
	{
		Schema::create('tipo_telefones', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string("descricao");
		});
	}

	public function down()
	{
		Schema::drop('tipo_telefone');
	}

}
