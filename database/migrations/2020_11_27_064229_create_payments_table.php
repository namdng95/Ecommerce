<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id')->autoIncrement();
            $table->string('payment_code')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status');
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
        Schema::dropIfExists('payments');
        Schema::enableForeignKeyConstraints();
    }
}