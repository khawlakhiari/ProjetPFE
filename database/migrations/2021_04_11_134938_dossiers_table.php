<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers',function (Blueprint $table){
            $table->increments('id');
            $table->string('annee_bac');
            $table->string('bac');
            $table->string('img_bac');
            $table->string('img_etud');
            $table->Integer('id_etud')->unsigned();
            $table->foreign('id_etud')
                ->references('id')
                ->on('etudiants')
                ->onDelete('cascade');});
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
