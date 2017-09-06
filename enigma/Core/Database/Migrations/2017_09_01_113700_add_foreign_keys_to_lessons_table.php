<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lessons', function(Blueprint $table)
		{
			$table->foreign('schedule_id', 'lessons_ibfk_1')->references('id')->on('schedules')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('member_id', 'lessons_ibfk_2')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('organization_id', 'lessons_ibfk_3')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lessons', function(Blueprint $table)
		{
			$table->dropForeign('lessons_ibfk_1');
			$table->dropForeign('lessons_ibfk_2');
			$table->dropForeign('lessons_ibfk_3');
		});
	}

}
