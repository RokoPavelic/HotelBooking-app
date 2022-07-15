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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id()->cascadeOnDelete();
            $table->foreignId('contact_info_id')->nullable()->cascadeOnDelete();
            $table->foreignId('room_id')->nullable()->cascadeOnDelete();
            $table->date('date_in')->nullable()->cascadeOnDelete();
            $table->date('date_out')->nullable()->cascadeOnDelete();
            $table->boolean('booked');
            $table->string('role_description')->nullable();
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
