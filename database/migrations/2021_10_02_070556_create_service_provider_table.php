<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_provider', function (Blueprint $table) {
            $table->id('ID_serviceProvider');
            $table->unsignedBigInteger('ID_user');
            $table->foreign('ID_user')->references('ID_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('privateKey');
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
        Schema::dropIfExists('service_provider');
    }
}
