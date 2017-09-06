<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_posts', function(Blueprint $table)
		{
			$table->foreign('member_id', 'forum_posts_ibfk_1')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('forum_id', 'forum_posts_ibfk_2')->references('id')->on('forums')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_posts', function(Blueprint $table)
		{
			$table->dropForeign('forum_posts_ibfk_1');
			$table->dropForeign('forum_posts_ibfk_2');
		});
	}

}
