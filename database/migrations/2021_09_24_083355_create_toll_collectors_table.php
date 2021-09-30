<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTollCollectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toll_collectors', function (Blueprint $table) {
            $table->id();
            $table->string('tc_no');
            $table->string('lane');
            $table->string('car_class');
            $table->string('frees');
            $table->string('car_no');
            $table->string('imp_car_img');
            $table->string('out_car_img');
            $table->string('data_time');
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
        Schema::dropIfExists('toll_collectors');
    }
}
