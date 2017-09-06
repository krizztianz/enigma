<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExerciseReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercise_reviews', function(Blueprint $table)
		{
			$table->foreign('exercise_answer_id', 'exercise_reviews_ibfk_1')->references('id')->on('exercise_answers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('exercise_score_id', 'exercise_reviews_ibfk_2')->references('id')->on('exercise_scores')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('exercise_question_id', 'exercise_reviews_ibfk_3')->references('id')->on('exercise_questions')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('member_id', 'exercise_reviews_ibfk_4')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exercise_reviews', function(Blueprint $table)
		{
			$table->dropForeign('exercise_reviews_ibfk_1');
			$table->dropForeign('exercise_reviews_ibfk_2');
			$table->dropForeign('exercise_reviews_ibfk_3');
			$table->dropForeign('exercise_reviews_ibfk_4');
		});
	}

}
