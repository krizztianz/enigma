<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_options', function(Blueprint $table)
		{
			$table->foreign('exercise_question_id', 'exercise_options_ibfk_1')->references('id')->on('exercise_questions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_options', function(Blueprint $table)
		{
			$table->dropForeign('exercise_options_ibfk_1');
		});
	}

}
