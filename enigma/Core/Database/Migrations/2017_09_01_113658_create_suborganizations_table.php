<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuborganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suborganizations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organization_id')->unsigned()->index('organization_id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->integer('parent_organization')->unsigned()->index('parent_organization');
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
		Schema::drop('suborganizations');
	}

}
