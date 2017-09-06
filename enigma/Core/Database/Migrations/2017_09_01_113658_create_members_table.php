<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id');
			$table->integer('organization_id')->unsigned()->nullable()->index('organization_id');
			$table->string('member_code', 64)->nullable();
			$table->string('firstname', 64);
			$table->string('lastname', 64)->nullable();
			$table->text('address1', 65535)->nullable();
			$table->text('address2', 65535)->nullable();
			$table->string('phone1', 15)->nullable();
			$table->string('phone2', 15)->nullable();
			$table->string('photo')->nullable();
			$table->enum('activation', array('need_activation','active','inactive','blocked'))->default('need_activation');
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
		Schema::drop('members');
	}

}
