<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lessons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organization_id')->unsigned()->index('organization_id');
			$table->integer('schedule_id')->unsigned()->index('schedule_id');
			$table->integer('member_id')->unsigned()->index('member_id');
			$table->string('titile');
			$table->string('description')->nullable();
			$table->text('text', 65535)->nullable();
			$table->string('file_url')->nullable();
			$table->enum('type', array('text','file'))->default('text');
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
		Schema::drop('lessons');
	}

}
