<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->bigInteger('StudentID')->unsigned()->primary();
			$table->foreign('StudentID')->references('id')->on('users')->onDelete('cascade');
			$table->bigInteger('TeacherID')->unsigned();
			$table->foreign('TeacherID')->references('id')->on('users')->onDelete('cascade');
			$table->string('FirstName', 50);
			$table->string('LastName', 50);
			$table->string('Patronymic', 50)->nullable();
			$table->string('Gender', 10);
			$table->string('Class', 3);
			$table->dateTime('TurnoutTime')->nullable();
			$table->integer('roomnumber')->nullable();
			$table->longText('CodeGenQR');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
