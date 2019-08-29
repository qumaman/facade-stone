<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FileStorageType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('file_types')) {
            Schema::create('file_types', function (Blueprint $table) {
                $table->increments('id')->unsigned(false);
                $table->string('name')->nullable();
                $table->string('file_type');
                $table->string('path')->nullable();
                $table->string('file_extension');
                $table->integer('file_maxsize');
                $table->string('table_name')->nullable();
                $table->string('access_level')->nullable();
            });
        }


        DB::table('file_types')->insert([
            'id' => 1,
            'name' => 'Печати и штампы',
            'file_type' => 'stamp',
            'path' => 'images/stamps/',
            'file_extension' => 'pdf,png,gif,jpeg,jpg,bmp',
            'file_maxsize' => '5120',
            'table_name' => 'stamps',
            'access_level' => '111111111110',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
