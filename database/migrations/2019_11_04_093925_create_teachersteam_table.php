<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersteamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachersteam', function(Blueprint $table)
		{
			$table->bigIncrements('TeamID');
			$table->bigInteger('TeacherID')->unsigned();
			$table->foreign('TeacherID')->references('TeacherID')->on('teachers')->onDelete('cascade');
			$table->string('TeamName', 50)->nullable();
			$table->smallInteger('SummTeamScore')->unsigned()->nullable();
			$table->smallInteger('PhTeamScore')->unsigned()->nullable();
			$table->smallInteger('MathTeamScore')->unsigned()->nullable();
			$table->smallInteger('InfTeamScore')->unsigned()->nullable();
			$table->smallInteger('SummTeamPlace')->unsigned()->nullable();
			$table->smallInteger('PhTeamPlace')->unsigned()->nullable();
			$table->smallInteger('MathTeamPlace')->unsigned()->nullable();
			$table->smallInteger('InfTeamPlace')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teachersteam');
	}

}
