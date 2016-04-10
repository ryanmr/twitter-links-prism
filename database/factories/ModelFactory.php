<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tweet::class, function(Faker\Generator $faker) {
  $tweet_id = $faker->randomNumber(5);
  return [
    'tweet_id' => $tweet_id,
    'tweet_url' => 'https://twitter.com/ryanmr/status/' . $tweet_id,
    'embedded_url' => $faker->url,
    'display_url' => $faker->domainName,
    'remote_title' => $faker->slug,
    'remote_description' => $faker->sentence,
    'retweet_count' => $faker->randomDigit,
    'favorite_count' => $faker->randomDigit,
    'tweet_created_at' => $faker->iso8601
  ];
});
