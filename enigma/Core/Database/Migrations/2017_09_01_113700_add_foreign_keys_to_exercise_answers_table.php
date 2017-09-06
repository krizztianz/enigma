<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_answers', function(Blueprint $table)
		{
			$table->foreign('exercise_id', 'exercise_answers_ibfk_1')->references('id')->on('exercises')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('exercise_question_id', 'exercise_answers_ibfk_2')->references('id')->on('exercise_questions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_answers', function(Blueprint $table)
		{
			$table->dropForeign('exercise_answers_ibfk_1');
			$table->dropForeign('exercise_answers_ibfk_2');
		});
	}

}
