<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Socialite;
use Auth;

use App\TwitterAccount;
use App\TwitterDetails;

class TwitterController extends Controller
{

  /**
   * Connect to Twitter. Redirect the logged in user for entry into Twitter.
   *
   * @return redirect redirect to a new location
   */
  public function redirectToProvider() {

    if (!Auth::check()) {
      return redirect('/');
    }

    try {
      return Socialite::driver('twitter')->redirect();
    } catch (\Exception $e) {
      return redirect()->route('twitter.error');
    }

  }

  /**
   * Handle the Twitter callback and the values that go along with it.
   *
   * Ensure the user is already logged into the local application.
   * Get the Twitter account and details, and store or update them.
   *
   * Then redirect back to home.
   *
   * @return [type] [description]
   */
  public function handleProviderCallback() {

    if (!Auth::check()) {
      return redirect('home');
    }

    $user = Auth::user();

    try {
      $twitterUser = Socialite::driver('twitter')->user();

      $twitterAccount = new TwitterAccount();
      if (isset($user->account)) {
        $twitterAccount = $user->account;
      }
      $twitterAccount->token = $twitterUser->token;
      $twitterAccount->token_secret = $twitterUser->tokenSecret;
      $twitterAccount->twitter_id = $twitterUser->user['id_str'];
      $twitterAccount->user_id = $user->id;
      $twitterAccount->save();

      $twitterDetails = new TwitterDetails();
      if (isset($user->details)) {
        $twitterDetails = $user->account;
      }
      $twitterDetails->name = $twitterUser->name;
      $twitterDetails->nickname = $twitterUser->nickname;
      $twitterDetails->avatar = $twitterUser->avatar;
      $twitterDetails->user_id = $user->id;
      $twitterDetails->save();

      return redirect()->route('home');

    } catch (\Exception $e) {
      // dump($e);
      return redirect()->route('twitter.error');
    }

  }

  public function handleError() {
    return view('twitter.error');
  }

}
