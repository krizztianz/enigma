<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_reviews', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercise_score_id')->unsigned()->index('exercise_review_ibfk_2');
			$table->integer('exercise_question_id')->unsigned()->index('exercise_question_id');
			$table->integer('exercise_answer_id')->unsigned()->index('exercise_answer_id');
			$table->integer('member_id')->unsigned()->index('member_id');
			$table->text('member_answer', 65535);
			$table->enum('correct', array('yes','no'));
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
		Schema::drop('exercise_reviews');
	}

}
