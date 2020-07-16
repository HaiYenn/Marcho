 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->Increments('proDetail_id');
            $table->unsignedInteger('pro_id');
            $table->unsignedInteger('color_id');
            $table->unsignedInteger('size_id');
            $table->string('description')->nullable();
            $table->Integer('discount')->nullable();
            $table->Integer('quantity')->nullable(false);
            $table->string('view')->nullable();
            $table->timestamps();
            $table->foreign('pro_id')->references('pro_id')->on('product');
            $table->foreign('size_id')->references('size_id')->on('size');
            $table->foreign('color_id')->references('color_id')->on('color');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_detail');
    }
}
