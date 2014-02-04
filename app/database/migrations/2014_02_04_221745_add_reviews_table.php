<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function($t) {
			$t->engine = "InnoDB";
			$t->increments('id');
			$t->integer('score')->unsigned();
			$t->integer('presentation_id')->unsigned();
			$t->timestamps();

			$t->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reviews', function($t) {
			$t->dropForeign('reviews_presentation_id_foreign');
		});
		Schema::drop('reviews');
	}

}
