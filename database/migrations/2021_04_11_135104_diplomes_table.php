<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiplomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomes',function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('mention');
            $table->string('date');
            $table->string('img_diplome');
            $table->string('pay');
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
