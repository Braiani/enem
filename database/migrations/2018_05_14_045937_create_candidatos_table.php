<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cpf', 11);
			$table->string('nome');
			$table->string('nome_mae');
			$table->string('cn', 10)->nullable();
			$table->string('ch', 10)->nullable();
			$table->string('lc', 10)->nullable();
			$table->string('mat', 10)->nullable();
			$table->string('red', 10)->nullable();
			$table->integer('edicao_id');
			$table->string('nu_inscricao', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidatos');
	}

}
