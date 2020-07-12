<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsteamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentsteam', function(Blueprint $table)
		{
			$table->bigInteger('StudentID')->unsigned()->primary();
			$table->foreign('StudentID')->references('StudentID')->on('students')->onDelete('cascade');
			$table->bigInteger('TeamID')->unsigned()->nullable();
			$table->smallInteger('SummSelfScore')->unsigned()->nullable();
			$table->smallInteger('SummSelf10Score')->unsigned()->nullable();
			$table->smallInteger('SummSelf11Score')->unsigned()->nullable();
			$table->smallInteger('PhSelfScore')->unsigned()->nullable();
			$table->smallInteger('PhSelf10Score')->unsigned()->nullable();
			$table->smallInteger('PhSelf11Score')->unsigned()->nullable();
			$table->smallInteger('InfSelfScore')->unsigned()->nullable();
			$table->smallInteger('InfSelf10Score')->unsigned()->nullable();
			$table->smallInteger('InfSelf11Score')->unsigned()->nullable();
			$table->smallInteger('MathSelfScore')->unsigned()->nullable();
			$table->smallInteger('MathSelf10Score')->unsigned()->nullable();
			$table->smallInteger('MathSelf11Score')->unsigned()->nullable();
			$table->smallInteger('SummSelfPlace')->unsigned()->nullable();
			$table->smallInteger('SummSelf10Place')->unsigned()->nullable();
			$table->smallInteger('SummSelf11Place')->unsigned()->nullable();
			$table->smallInteger('PhSelfPlace')->unsigned()->nullable();
			$table->smallInteger('PhSelf10Place')->unsigned()->nullable();
			$table->smallInteger('PhSelf11Place')->unsigned()->nullable();
			$table->smallInteger('InfSelfPlace')->unsigned()->nullable();
			$table->smallInteger('InfSelf10Place')->unsigned()->nullable();
			$table->smallInteger('InfSelf11Place')->unsigned()->nullable();
			$table->smallInteger('MathSelfPlace')->unsigned()->nullable();
			$table->smallInteger('MathSelf10Place')->unsigned()->nullable();
			$table->smallInteger('MathSelf11Place')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('studentsteam');
	}

}
