<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement_user', function (Blueprint $table) {
            $table->integer('agreement_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->engine = "InnoDB";
            $table->primary(['agreement_id', 'user_id']);
            $table->foreign('agreement_id')->references('id')->on('agreements')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agreement_user');
    }
}
