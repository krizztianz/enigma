<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('schedules', function(Blueprint $table)
		{
			$table->foreign('course_id', 'schedules_ibfk_1')->references('id')->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('organization_id', 'schedules_ibfk_2')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('schedules', function(Blueprint $table)
		{
			$table->dropForeign('schedules_ibfk_1');
			$table->dropForeign('schedules_ibfk_2');
		});
	}

}
