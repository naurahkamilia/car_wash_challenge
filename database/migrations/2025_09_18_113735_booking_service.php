<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_service', function (Blueprint $table){
            $table->bigIncrements('bookingServe_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('service_id');
            $table->integer('price');

            $table->foreign('booking_id')->references('booking_id')->on('booking');
            $table->foreign('service_id')->references('service_id')->on('service');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
