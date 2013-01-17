<?php

class {{class}} {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//创建{{table}}
		Schema::table("{{table}}",function($table){
			$table->create();
			$table->increments('id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//删除{{table}}
		Schema::drop("{{table}}");
	}

}