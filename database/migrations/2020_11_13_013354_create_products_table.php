<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->autoIncrement();
            $table->unsignedBigInteger('cate_id');
            $table->string('product_name', 125);
            $table->string('product_price', 50);
            $table->string('product_slug', 50);
            $table->string('product_desc', 255)->nullable();
            $table->integer('product_quantity')->nullable()->default(0);
            $table->string('product_img', 255)->nullable();
            $table->tinyInteger('product_status')->default(0);
            $table->integer('product_viewed')->default(0);
            $table->foreign('cate_id')->references('cate_id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
}
