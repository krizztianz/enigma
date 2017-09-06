<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercise_id')->unsigned()->index('exercise_id');
			$table->integer('exercise_question_id')->unsigned()->index('exercise_question_id');
			$table->text('answer', 65535);
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
		Schema::drop('exercise_answers');
	}

}
