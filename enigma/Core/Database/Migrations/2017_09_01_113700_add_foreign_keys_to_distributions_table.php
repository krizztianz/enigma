<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDistributionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('distributions', function(Blueprint $table)
		{
			$table->foreign('suborganization_id', 'distributions_ibfk_1')->references('id')->on('suborganizations')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('subject_id', 'distributions_ibfk_2')->references('id')->on('subjects')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('organization_id', 'distributions_ibfk_3')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('distributions', function(Blueprint $table)
		{
			$table->dropForeign('distributions_ibfk_1');
			$table->dropForeign('distributions_ibfk_2');
			$table->dropForeign('distributions_ibfk_3');
		});
	}

}
