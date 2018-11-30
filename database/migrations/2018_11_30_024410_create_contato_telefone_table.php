<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoTelefoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contato_telefone', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("telefone");
			$table->integer("id_contato")->unsigned();
            $table->integer('id_tipo_telefone')->unsigned();

            $table->foreign("id_contato")
                ->references('id')->on('contatos')
                ->onDelete('cascade');

            $table->foreign('id_tipo_telefone')
                ->references('id')->on('tipo_telefone');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contato_telefone');
	}

}
