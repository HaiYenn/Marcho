<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->Increments('com_id');
            $table->unsignedBigInteger('id');
            $table->unsignedInteger('pro_id');
            $table->string('name');
            $table->string('email');
            $table->string('content');
            $table->foreign('id')->references('id')->on('users');
            $table->foreign('pro_id')->references('pro_id')->on('product');
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
        Schema::dropIfExists('comment');
    }
}
