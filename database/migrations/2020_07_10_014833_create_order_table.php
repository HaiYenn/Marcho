<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('total_amount',255);
            $table->tinyInteger('order_status');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedBigInteger('payment_id');
            $table->foreign('user_id')->references('id')->on('info_user');
            $table->foreign('payment_id')->references('id')->on('payment');
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
        Schema::dropIfExists('order');
    }
}
