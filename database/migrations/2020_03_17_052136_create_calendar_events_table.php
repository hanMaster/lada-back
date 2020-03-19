<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('filial_id')->default(1);
            $table->bigInteger('doctor_id');
            $table->bigInteger('spec_id');
            $table->string('start');
            $table->string('end');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->string('phone');
            $table->integer('record_type')->default(1);
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
        Schema::dropIfExists('calendar_events');
    }
}
