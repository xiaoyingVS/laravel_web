<?php

class Account_Tag {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//用户使用的标签
		Schema::table("account_tag",function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id');//通行证编号
			$table->integer('tag_id');
			$table->index('account_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("account_tag");
	}

}