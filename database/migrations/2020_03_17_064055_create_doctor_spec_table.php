<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_spec', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('doctor_id');
            $table->bigInteger('spec_id');
            $table->string('min_time');
            $table->string('max_time');
            $table->string('days_off');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_spec');
    }
}
