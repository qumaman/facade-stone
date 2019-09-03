<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ru')->nullable();
            $table->string('name_kz')->nullable();
            $table->string('name_en')->nullable();
            $table->string('file_extension')->nullable();
            $table->integer('file_maxsize')->nullable();
            $table->string('table_name')->nullable();
            $table->string('access_level')->nullable();
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
        Schema::dropIfExists('attachments');
    }
}