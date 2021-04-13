<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MembreJuryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres_jury',function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('password');
            $table->string('telephone');

            $table->Integer('id_master')->unsigned();
            $table->foreign('id_master')
                ->references('id')
                ->on('masters')
                ->onDelete('cascade');
            $table->Integer('id_admin')->unsigned();
            $table->foreign('id_admin')
                ->references('id')
                ->on('admins')
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
