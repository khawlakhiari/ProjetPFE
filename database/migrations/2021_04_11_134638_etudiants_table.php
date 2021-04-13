<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {

            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('Telephone');
            $table->string('password');
            $table->string('sexe')->nullable();
            $table->string('cin')->nullable();
            $table->string('date_nais')->nullable();
            $table->string('lieu')->nullable();
            $table->string('ville')->nullable();
            $table->string('codepostal')->nullable();
            $table->string('profession')->nullable();
            $table->string('societe')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('id_anne_univ')->unsigned();
            $table->foreign('id_anne_univ')->references('id')->on('annee_universitaire')->onDelete('cascade');
            $table->Integer('id_master')->unsigned();
            $table->foreign('id_master')
                ->references('id')
                ->on('masters')
                ->onDelete('cascade');

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
        //
    }
}
