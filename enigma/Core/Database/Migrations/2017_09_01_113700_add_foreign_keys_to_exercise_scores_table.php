<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_scores', function(Blueprint $table)
		{
			$table->foreign('exercise_id', 'exercise_scores_ibfk_1')->references('id')->on('exercises')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('member_id', 'exercise_scores_ibfk_2')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_scores', function(Blueprint $table)
		{
			$table->dropForeign('exercise_scores_ibfk_1');
			$table->dropForeign('exercise_scores_ibfk_2');
		});
	}

}
