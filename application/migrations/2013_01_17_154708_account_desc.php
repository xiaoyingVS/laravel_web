<?php

class Account_Desc {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//一句话介绍自己	
		Schema::table('account_desc',function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id')->unique();
			$table->text('descript')->nullable();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_desc');
	}

}