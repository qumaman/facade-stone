<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article');
            $table->integer('subcategory_id');
            $table->string('title');
            $table->string('description');
            $table->integer('cost');
            $table->integer('count');
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
        Schema::dropIfExists('stamps');
    }
}
