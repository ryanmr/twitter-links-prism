<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tweets', function(Blueprint $table){
        $table->increments('id');

        $table->string('tweet_id');

        $table->string('tweet_url');

        $table->string('embedded_url');

        $table->string('display_url');

        $table->string('remote_title');

        $table->string('remote_description');

        $table->integer('retweet_count');

        $table->integer('favorite_count');

        $table->string('tweet_created_at');

        $table->string('raw');

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
        //
    }
}
