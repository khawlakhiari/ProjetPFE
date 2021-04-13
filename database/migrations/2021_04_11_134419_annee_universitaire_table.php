<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnneeUniversitaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_universitaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('annee');
            $table->string('niveau');
            $table->string('session');
            $table->string('moyenne');
            $table->string('resultat');
            $table->integer('id_univer')->unsigned();
            $table->foreign('id_univer')->references('id')->on('universites')->onDelete('cascade');

        });
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
