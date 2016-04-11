<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;

use Abraham\TwitterOAuth\TwitterOAuth;

use App\Services\Twitter;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Twitter $twitter)
    {
        $user = Auth::user();
        $user->load('account', 'details');

        // $twitter->setUser($user);
        // dd($twitter->getUserTimeline());

        return view('dashboard.index', ['user' => $user]);
    }
}
