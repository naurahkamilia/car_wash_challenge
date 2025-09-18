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
        Schema::create('booking', function (Blueprint $table){
            $table->bigIncrements('booking_id');
            $table->unsignedBigInteger('car_id');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->integer('price');
            $table->enum('status', ['booked', 'in-progres', 'completed', 'canceled']);
            $table->text('notes');

            $table->foreign('car_id')->references('car_id')->on('car');

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
