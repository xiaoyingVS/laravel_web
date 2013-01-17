<?php

class Account_Login_Log {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//登陆日志
		Schema::table('account_login_log',function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id');//通行证编号
			$table->string('login_ip',64);//登陆IP
			$table->integer('login_time');//登陆时间
			$table->index('account_id');//添加索引
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_login_log');
	}

}