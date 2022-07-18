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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_type');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('location');
            $table->string('size')->nullable();
            $table->integer('capacity')->nullable();
            $table->text('amenities')->nullable();
            $table->string('facilities')->nullable();
            $table->string('price_low')->nullable();
            $table->string('price_medium')->nullable();
            $table->string('price_high')->nullable();
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
