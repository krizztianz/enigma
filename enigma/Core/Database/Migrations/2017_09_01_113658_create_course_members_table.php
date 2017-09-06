<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned()->index('course_id');
			$table->integer('member_id')->unsigned()->index('member_id');
			$table->string('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_members');
	}

}
