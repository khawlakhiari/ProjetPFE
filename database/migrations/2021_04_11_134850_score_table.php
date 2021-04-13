<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores',function (Blueprint $table) {
            $table->increments('id');
            $table->float('score');
            $table->Integer('id_etud')->unsigned();
            $table->foreign('id_etud')
                ->references('id')
                ->on('etudiants')
                ->onDelete('cascade');

        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
