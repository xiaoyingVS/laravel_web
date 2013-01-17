<?php

class Account_Statistic {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//创建用户统计表
		Schema::table("account_statistic",function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id')->unique();
			$table->integer('follow');
			$table->integer('fans');
			$table->integer('weibo');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//创建用户统计表
		Schema::drop("account_statistic");
	}

}