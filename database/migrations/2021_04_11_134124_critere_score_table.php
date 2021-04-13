<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CritereScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteres_score',function (Blueprint $table) {
            $table->increments('id');
            $table->string('critere');

            $table->Integer('id_MJ')->unsigned();
            $table->foreign('id_MJ')
                ->references('id')
                ->on('membres_jury')
                ->onDelete('cascade');
            $table->Integer('id_master')->unsigned();
            $table->foreign('id_master')
                ->references('id')
                ->on('masters')
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
