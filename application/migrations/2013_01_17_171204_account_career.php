<?php

class Account_Career {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//职业信息
		Schema::table("account_career",function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id');
			$table->integer('province_id');//省ID
			$table->integer('city_id');//城市ID
			$table->string('company',128);//公司名称
			$table->integer('start');//开始时间
			$table->integer('end');//结束时间	
			$table->string('remark',128);//公司组织
			$table->integer('career_authority');//权限==1全部可见2仅自己可见3我关注的人可见(默认1)
			$table->index('account_id');
			$table->index('company');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_career');
	}

}