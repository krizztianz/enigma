<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercise_id')->unsigned()->index('exercise_id');
			$table->integer('question_no');
			$table->text('question_text', 65535);
			$table->enum('question_type', array('multiple_choice','essay'))->default('multiple_choice');
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
		Schema::drop('exercise_questions');
	}

}
