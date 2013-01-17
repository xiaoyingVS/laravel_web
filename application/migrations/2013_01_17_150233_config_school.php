<?php

class Config_School {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//学校
		Schema::table('config_school',function($table){
			$table->create();
			$table->increments('id');
			$table->string('school_name',64);//关键字
			$table->integer('city_id');//父级ID
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
		Schema::drop('config_school');
	}

}