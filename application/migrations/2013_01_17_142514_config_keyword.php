<?php

class Config_Keyword {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//关键词过滤
		Schema::table('config_keyword',function($table){
			$table->create();
		    $table->increments('id');
			$table->string('keywords',32);//关键字
			$table->index('keywords');//添加索引
			$table->engine = 'MyISAM';
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
		Schema::drop('config_keyword');
	}

}