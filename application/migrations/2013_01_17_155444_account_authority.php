<?php

class Account_Authority {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//用户权限
		Schema::table('account_authority',function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id')->unique();
			$table->integer('ture_name');//真实姓名==1全部可见2仅自己可见3我关注的人可见(默认2)
			$table->integer('sextrend');//性取向==1全部可见2仅自己可见3我关注的人可见(默认3)
			$table->integer('love');//感情状况==1全部可见2仅自己可见3我关注的人可见(默认3)
			$table->integer('birthday');//生日==1完整公开2显示月日3保密(默认2)
			$table->integer('blood');//血型==1全部可见2仅自己可见3我关注的人可见(默认2)
			$table->integer('blog');//博客==1全部可见2仅自己可见3我关注的人可见(默认1)
			$table->integer('qq');//qq==1全部可见2仅自己可见3我关注的人可见(默认3)
			$table->integer('msn');//msn==1全部可见2仅自己可见3我关注的人可见(默认3)
			$table->integer('use_email');//常用邮件==1全部可见2仅自己可见3我关注的人可见(默认3)
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_authority');
	}

}