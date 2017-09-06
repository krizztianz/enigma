<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->foreign('organization_id', 'courses_ibfk_1')->references('id')->on('organizations')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('distribution_id', 'courses_ibfk_2')->references('id')->on('distributions')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('mentor_id', 'courses_ibfk_3')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->dropForeign('courses_ibfk_1');
			$table->dropForeign('courses_ibfk_2');
			$table->dropForeign('courses_ibfk_3');
		});
	}

}
