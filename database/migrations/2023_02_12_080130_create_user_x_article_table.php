<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_x_article', function (Blueprint $table) {
            $table->id('id_user_x_article');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('fk_article');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fk_article')->references('id_article')->on('articles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_x_article');
    }
};