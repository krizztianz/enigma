<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExerciseOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercise_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('exercise_question_id')->unsigned()->index('exercise_question_id');
			$table->string('option_item', 2);
			$table->string('option_text');
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
		Schema::drop('exercise_options');
	}

}
