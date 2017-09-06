<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_questions', function(Blueprint $table)
		{
			$table->foreign('exercise_id', 'exercise_questions_ibfk_1')->references('id')->on('exercises')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_questions', function(Blueprint $table)
		{
			$table->dropForeign('exercise_questions_ibfk_1');
		});
	}

}
