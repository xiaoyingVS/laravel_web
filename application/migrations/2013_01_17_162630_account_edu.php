<?php

class Account_Edu {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//教育信息
		Schema::table('account_edu',function($table){
			$table->create();
			$table->increments('id');
			$table->integer('account_id');
			$table->integer('school_id');
			$table->string('remark')->nullable();//院系名称
			$table->integer('edu_type');//学校类型（1小学2初中3中专4高中5大学）
			$table->integer('edu_start');//入学年份			
			$table->integer('edu_authority');//权限==1全部可见2仅自己可见3我关注的人可见(默认1)
			$table->integer('edu_addtime');//添加时间
			$table->index('account_id');
			$table->index('school_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("account_edu");
	}

}