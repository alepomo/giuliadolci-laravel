<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function( $table ) 
		{
  		$table->increments('id');
  		$table->string('slug');
  		$table->text('title');
  		$table->text('description')->nullable();
  		$table->text('notes')->nullable();
  		$table->integer('order')->nullable();
  		$table->integer('category')->nullable();
  		$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
