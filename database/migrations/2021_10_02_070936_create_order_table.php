<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('ID_order');
            $table->unsignedBigInteger('ID_user');
            $table->foreign('ID_user')->references('ID_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('ID_service');
            $table->foreign('ID_service')->references('ID_service')->on('service')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cost');
            $table->date('order_date');
            $table->date('service_date');
            $table->string('status_payment');
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
