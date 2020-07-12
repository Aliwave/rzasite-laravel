<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\MainIfo;

class CreateMaininfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maininfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('maindatestart');
            $table->string('maindatestartstring');
            $table->date('regdatestart');
            $table->date('regdateend');
            $table->string('regdatestartstring');
            $table->string('regdateendstring');
            $table->time('regtimeend');
            $table->string('regtimeendstring');
            $table->string('year');
            $table->string('place');
            $table->string('teachertabletitle');
            $table->smallInteger('teamsize');
            $table->string('showresults');
            $table->string('regenable')->nullable();
            $table->string('loginenable')->nullable();
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
        Schema::dropIfExists('maininfo');
    }
}
