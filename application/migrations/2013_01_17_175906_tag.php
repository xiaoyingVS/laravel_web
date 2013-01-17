<?php

class Tag {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//标签
		Schema::table("tag",function($table){
			$table->create();
			$table->increments('id');
			$table->string('tag_name');
			$table->index('tag_name');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("tag");
	}

}