<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_details', function(Blueprint $table){
          $table->increments('id');

          $table->string('name');
          $table->string('nickname'); // twitter handle
          $table->string('avatar');

          $table->integer('user_id')->unsigned();

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
        Schema::drop('twitter_details');
    }
}
