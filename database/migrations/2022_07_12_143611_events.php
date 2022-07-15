<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('booking_id');
            $table->foreignId('room_id')->nullable();
            $table->string('event_name');
            $table->date('event_date')->nullable();
            $table->dateTime('event_start')->nullable();
            $table->dateTime('event_end')->nullable();
            $table->text('event_description');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['deleted_at']);
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
