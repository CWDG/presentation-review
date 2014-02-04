<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($t) {
			$t->increments('id');
			$t->text('comment');
			$t->integer('review_id')->unsigned();
			$t->timestamps();

			$t->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function($t) {
			$t->dropForeign('comments_review_id_foreign');
		});

		Schema::drop('comments');
	}

}
