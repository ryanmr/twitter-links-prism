<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_accounts', function(Blueprint $table){
          $table->increments('id');

          $table->string('token');
          $table->string('token_secret');

          $table->string('twitter_id');

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
        Schema::drop('twitter_accounts');
    }
}
