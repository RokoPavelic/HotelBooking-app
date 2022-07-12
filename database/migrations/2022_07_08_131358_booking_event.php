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
        Schema::create('booking_event', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_id')->cascadeOnDelete();
            $table->foreignId('booking_id')->cascadeOnDelete();
            $table->foreignId('admin_id')->cascadeOnDelete();
            $table->foreignId('contact_info_id')->cascadeOnDelete();
            $table->string('event_name');
            $table->dateTime('event_start');
            $table->dateTime('event_end');
            $table->text('event_description');
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
        //
    }
};
