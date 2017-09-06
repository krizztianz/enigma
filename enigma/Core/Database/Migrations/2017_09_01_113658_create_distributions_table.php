<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDistributionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('distributions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organization_id')->unsigned()->index('organization_id');
			$table->integer('suborganization_id')->unsigned()->index('suborganization_id');
			$table->integer('subject_id')->unsigned()->index('subject_id');
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
		Schema::drop('distributions');
	}

}
