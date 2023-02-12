<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category_x_article', function (Blueprint $table) {
            $table->id('id_category_x_article');
            $table->unsignedBigInteger('fk_category');
            $table->unsignedBigInteger('fk_article');

            $table->foreign('fk_category')->references('id_category')->on('categories')->onDelete('cascade');
            $table->foreign('fk_article')->references('id_article')->on('articles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_x_article');
    }
};