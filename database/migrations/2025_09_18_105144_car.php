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
        Schema::create('car', function (Blueprint $table){
            $table->bigIncrements('car_id');
            $table->unsignedBigInteger('cust_id');
            $table->string('merk');
            $table->string('plat_no');
            $table->string('stnk_num');

            $table->foreign('cust_id')->references('cust_id')->on('customer');
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
