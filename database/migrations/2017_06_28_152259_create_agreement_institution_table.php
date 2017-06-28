<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementInstitutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement_institution', function (Blueprint $table) {
            $table->integer('agreement_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->timestamps();

            $table->engine = "InnoDB";
            $table->primary(['agreement_id', 'institution_id']);
            $table->foreign('agreement_id')->references('id')->on('agreements')->onDelete('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agreement_institution');
    }
}
