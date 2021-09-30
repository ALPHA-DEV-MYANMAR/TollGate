<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarClassControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_class_controls', function (Blueprint $table) {
            $table->id();
            $table->string('classone');
            $table->string('classtwo');
            $table->string('classthree');
            $table->string('classfour');
            $table->string('classfive');
            $table->string('classsix');
            $table->string('classseven');
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
        Schema::dropIfExists('car_class_controls');
    }
}
