<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter /*implements TwitterService*/ {

  private $backend;

  private $user;

  public function __construct(TwitterOAuth $twitterOAuth) {
    $this->backend = $twitterOAuth;
  }

  public function setUser($user) {
    $this->user = $user;
    $this->tokenize();
  }

  private function tokenize() {
    $this->backend->setOauthToken(
      $this->user->account->token,
      $this->user->account->token_secret
    );
  }

  public function verifyConnection() {

  }

  public function getUserTimeline($amount = 10) {
    $data = $this->backend->get('statuses/user_timeline', [
      'user_id' => $this->user->account->twitter_id,
      'count' => $amount
    ]);

    return $data;
  }

}
