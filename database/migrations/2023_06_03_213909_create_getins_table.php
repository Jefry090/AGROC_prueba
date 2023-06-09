<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getins', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->float('Quantity');
            $table->integer('id_crops')->unsigned();
            $table->foreign('id_crops')->references('id')->
            on('crops')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->
            on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_supplies')->unsigned();
            $table->foreign('id_supplies')->references('id')->
            on('supplies')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_animal')->unsigned();
            $table->foreign('id_animal')->references('id')->
            on('animals')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_machineries')->unsigned();
            $table->foreign('id_machineries')->references('id')->
            on('machineries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('getins');
    }
}
