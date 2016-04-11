<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Abraham\TwitterOAuth\TwitterOAuth;

use App\Services\Twitter;

class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Abraham\TwitterOAuth\TwitterOAuth', function($app){
          /**
           * TwitterOAuth does not require the tokens to be set here, graciously.
           * As such, they can be set later by setOauthToken.
           * https://github.com/abraham/twitteroauth/blob/master/src/TwitterOAuth.php#L42
           */
          return new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret')
          );
        });

        $this->app->bind('App\Services\Twitter', function($app) {
          return new Twitter($app->make(TwitterOAuth::class));
        });
    }
}
