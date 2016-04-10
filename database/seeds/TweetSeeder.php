<?php

use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Create faker'd Tweets.
     *
     * These tweets are created with Faker.
     * Eventually, these would be replaced with mock data,
     * directly adapted from Twitter.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tweets')->delete();

      $number = 50;

      // using first() here because after multiple seeds,
      // the first user might not be id=1 anymore
      $user = App\User::first();

      for($i = 0; $i < $number; $i++) {
        $tweet = factory(App\Tweet::class)->make();
        $user->tweets()->save($tweet);
      }


    }
}
