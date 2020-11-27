<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTheOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('shipping_id')->references('shipping_id')->on('shipping')->after('user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payment_id')->references('payment_id')->on('payments')->after('user_id')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('orders', function (Blueprint $table) {
            //
        });
        Schema::enableForeignKeyConstraints();
    }
}
