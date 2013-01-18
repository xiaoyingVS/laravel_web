<?php

class Account {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//通行证
		Schema::table("account",function($table){
			$table->create();
		    $table->increments('id');
		    $table->string('user_name',32)->unique();//昵称
		    $table->string('email',64)->unique();//邮件
			$table->string('hashed_password',64);//加密密码
			$table->string('salt',32);//加密锁
			$table->integer('add_time');//加入时间
		    //$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('account');
	}

}