<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name');
            $table->string('event_venue');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->time('start_time');
            $table->time('end_time');   
           // $table->string('event_type'); -- add
            //$table->string('event_type');  -- add author      
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
        Schema::dropIfExists('events');
    }
}
