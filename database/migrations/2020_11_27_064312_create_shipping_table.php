<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('shipping', function (Blueprint $table) {
            $table->unsignedBigInteger('shipping_id')->autoIncrement();
            $table->string('shipping_name');
            $table->string('shipping_address');
            $table->string('shipping_phone');
            $table->string('shipping_desc')->nullable();
            $table->string('shipping_status')->nullable();
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
        Schema::dropIfExists('shipping');
        Schema::enableForeignKeyConstraints();
    }
}
