<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ensen_id');
            $table->foreign('ensen_id')->references('id')->on('users');
            $table->string('as');
            $table->string('mt');
            $table->date('dt');
            $table->date('tr');
            $table->unsignedBigInteger('abs_id');
            $table->foreign('abs_id')->references('id')->on('students');
            $table->string('abr');
            $table->string('jfs');
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
        Schema::dropIfExists('absences');
    }
}


