<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('pro_id');
            $table->string('pro_name',255)->unique();
            $table->text('title',255);
            $table->tinyInteger('status')->default(0);
            $table->unsignedInteger('cat_id')->nullable()->default(0);
            $table->string('images');
            $table->float('price',255);
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
