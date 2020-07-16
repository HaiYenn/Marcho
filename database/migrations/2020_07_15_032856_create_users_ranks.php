<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRanks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_ranks', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedInteger('proDetail_id');
            $table->tinyInteger('rank');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('proDetail_id')->references('proDetail_id')->on('product_detail');
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
        Schema::dropIfExists('users_ranks');
    }
}
