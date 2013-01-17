<?php

class Account_Ext {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//通行证扩展表
		Schema::table('account_ext',function($table){
			$table->create();
		    $table->increments('id');
			$table->integer('account_id')->unique();
			$table->string('ture_name',64)->nullable();//真实姓名
			$table->integer('mobile')->nullable();//手机
			$table->string('idcard',18);//身份号
			$table->integer('love')->nullable();//感情状况(1单身2求交往3暗恋中4暧昧中5恋爱中6订婚7已婚8分居9离异10丧偶)
			$table->integer('gender')->nullabel();//性别(1男2女)
			$table->integer('sextrend')->nullabel();//性取向(1男2女3全部)
			$table->integer('province_id')->nullabel();//省ID
			$table->integer('city_id')->nullabel();//城市ID
			$table->string('ip',64);//注册IP
			//出生年月
			$table->string('birthday_y',4)->nullable();
			$table->string('birthday_m',2)->nullable();
			$table->string('birthday_d',2)->nullable();
			
			$table->string('blood',4)->nullable();//血型（A/B/AB/ABO/O）
			$table->string('blog')->nullable();//博客
			$table->string('qq',64)->nullable();
			$table->string('msn',64)->nullable();
			$table->string('use_email')->nullable();//常用邮件
			$table->integer('add_time');//加入时间
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
		Schema::drop('account_ext');
	}

}