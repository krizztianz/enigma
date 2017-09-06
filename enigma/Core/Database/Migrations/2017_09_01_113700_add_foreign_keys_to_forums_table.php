<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forums', function(Blueprint $table)
		{
			$table->foreign('schedule_id', 'forums_ibfk_1')->references('id')->on('schedules')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('organization_id', 'forums_ibfk_2')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forums', function(Blueprint $table)
		{
			$table->dropForeign('forums_ibfk_1');
			$table->dropForeign('forums_ibfk_2');
		});
	}

}
