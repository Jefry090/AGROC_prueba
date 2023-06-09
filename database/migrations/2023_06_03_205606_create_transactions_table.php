<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('Start_Date');
            $table->float('Amount_Paid');
            $table->string('Transaction_Status');
            $table->integer('id_PaymentMethods')->unsigned();
            $table->foreign('id_PaymentMethods')->references('id')->
            on('payment_methods')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_Suscription')->unsigned();
            $table->foreign('id_Suscription')->references('id')->
            on('suscriptions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transactions');
    }
}
