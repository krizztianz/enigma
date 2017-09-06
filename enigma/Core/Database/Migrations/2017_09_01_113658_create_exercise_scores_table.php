<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_scores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercise_id')->unsigned()->index('exercise_id');
			$table->integer('member_id')->unsigned()->index('exercise_scores_ibfk_2');
			$table->float('score', 10, 0);
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
		Schema::drop('exercise_scores');
	}

}
