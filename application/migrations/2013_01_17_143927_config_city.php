<?php

class Config_City {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//城市
		Schema::table('config_city',function($table){
			$table->create();
		    $table->increments('id');
			$table->string('city_name',64);//关键字
			$table->integer('pid');//父级ID
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
		Schema::drop('config_city');
	}

}