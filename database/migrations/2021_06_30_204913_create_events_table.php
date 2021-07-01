<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name')->comment('Name of event');
            $table->string('description')->comment('Description of event');
            $table->string('date')->comment('Date of event');
            $table->string('time')->comment('Time of event');
            $table->boolean('allDay')->comment('All day event');
            $table->string('recurrence')->nullable()->comment('Recurrence of event');

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
