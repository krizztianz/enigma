<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMemberRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('member_roles', function(Blueprint $table)
		{
			$table->foreign('member_id', 'member_roles_ibfk_1')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('role_id', 'member_roles_ibfk_2')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('member_roles', function(Blueprint $table)
		{
			$table->dropForeign('member_roles_ibfk_1');
			$table->dropForeign('member_roles_ibfk_2');
		});
	}

}
