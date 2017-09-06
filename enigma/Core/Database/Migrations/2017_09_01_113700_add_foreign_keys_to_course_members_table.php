<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCourseMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_members', function(Blueprint $table)
		{
			$table->foreign('course_id', 'course_members_ibfk_1')->references('id')->on('courses')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('member_id', 'course_members_ibfk_2')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_members', function(Blueprint $table)
		{
			$table->dropForeign('course_members_ibfk_1');
			$table->dropForeign('course_members_ibfk_2');
		});
	}

}
