<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code')->unique();
            $table->string('country');
            $table->timestamps();
        });

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('passport_number');
            $table->string('issued_by');
            $table->date('date_of_issue');
            $table->string('passport_id');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents');
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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('users');
        Schema::dropIfExists('documents');
    }
}
