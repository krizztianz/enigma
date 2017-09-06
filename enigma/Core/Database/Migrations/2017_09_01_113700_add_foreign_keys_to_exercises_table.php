<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercises', function(Blueprint $table)
		{
			$table->foreign('schedule_id', 'exercises_ibfk_1')->references('id')->on('schedules')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('organization_id', 'exercises_ibfk_2')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercises', function(Blueprint $table)
		{
			$table->dropForeign('exercises_ibfk_1');
			$table->dropForeign('exercises_ibfk_2');
		});
	}

}
