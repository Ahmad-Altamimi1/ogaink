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
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userId");
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger("planId");
            $table->foreign('planId')->references('id')->on('plans');
            $table->unsignedBigInteger('paymentId');
            $table->foreign('paymentId')->references('id')->on('payments');
            $table->unsignedBigInteger('shipmentId');
            $table->foreign('shipmentId')->references('id')->on('shipments');

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
        Schema::dropIfExists('subscribes');
    }
};
