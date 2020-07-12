<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers', function(Blueprint $table)
		{
			$table->bigInteger('TeacherID')->unsigned()->primary();
			$table->foreign('TeacherID')->references('id')->on('users')->onDelete('cascade');
			$table->string('FirstName', 50);
			$table->string('LastName', 50);
			$table->string('Patronymic', 50)->nullable();
			$table->string('Gender', 10);
			$table->string('City', 100);
			$table->string('ShortNameSchool', 50);
			$table->string('FullNameSchool', 200);
			$table->string('Subject', 20);
			$table->string('Phone', 20);
			$table->string('teachertable');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teachers');
	}

}
