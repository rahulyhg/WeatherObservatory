<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('type');
            $table->string('user');
            $table->string('pass');
            $table->string('name');
            $table->string('lastName');
            $table->string('email');
            $table->timestamps();   
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('people');
	}

}