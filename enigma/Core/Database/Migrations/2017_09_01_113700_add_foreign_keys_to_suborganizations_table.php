<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSuborganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suborganizations', function(Blueprint $table)
		{
			$table->foreign('organization_id', 'suborganizations_ibfk_1')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('parent_organization', 'suborganizations_ibfk_2')->references('id')->on('suborganizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suborganizations', function(Blueprint $table)
		{
			$table->dropForeign('suborganizations_ibfk_1');
			$table->dropForeign('suborganizations_ibfk_2');
		});
	}

}
