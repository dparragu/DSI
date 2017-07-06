<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->unsigned();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->date('fecha_firma');
            $table->date('fecha_decreto');
            $table->integer('decreto');
            $table->boolean('vigente');
            $table->integer('vigencia');
            $table->string('tipo');
            $table->string('descripcion');
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
        Schema::drop('agreements');
    }
}
