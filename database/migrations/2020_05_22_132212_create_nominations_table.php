<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullteam');
            $table->string('phteam');
            $table->string('mathteam');
            $table->string('infteam');
            $table->string('fullself');
            $table->string('full10self');
            $table->string('full11self');
            $table->string('phself');
            $table->string('ph10self');
            $table->string('ph11self');
            $table->string('infself');
            $table->string('inf10self');
            $table->string('inf11self');
            $table->string('mathself');
            $table->string('math10self');
            $table->string('math11self');
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
        Schema::dropIfExists('nominations');
    }
}
