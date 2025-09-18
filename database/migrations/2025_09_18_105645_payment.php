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
        Schema::create('payment', function (Blueprint $table){
            $table->bigIncrements('payment_id');
            $table->unsignedBigInteger('booking_id');
            $table->integer('total');
            $table->enum('status', ['pending', 'paid', 'canceled']);
            $table->enum('pay_method', ['cash', 'transfer', 'qris']);
            $table->timestamp('paid_at');

            $table->foreign('booking_id')->references('booking_id')->on('booking');
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
