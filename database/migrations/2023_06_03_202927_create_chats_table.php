<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('DateTime');
            $table->text('Text');
            $table->binary('Images');
            $table->binary('Videos');
            $table->binary('Audios');
            $table->integer('id_profiles')->unsigned();
            $table->foreign('id_profiles')->references('id')->
            on('profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->
            on('posts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chats');
    }
}
