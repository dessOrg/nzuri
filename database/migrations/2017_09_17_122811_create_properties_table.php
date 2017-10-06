<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('location');
            $table->string('street');
            $table->string('town');
            $table->string('bed');
            $table->string('parking');
            $table->string('bath');
            $table->string('size');
            $table->string('price');
            $table->string('image');
            $table->string('status');
            $table->string('user_id');
            $table->string('description', 1000);
            $table->string('type');
            $table->string('code');
            $table->rememberToken();
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
        //
    }
}
