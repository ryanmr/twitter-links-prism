<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function account() {
      return $this->hasOne('App\TwitterAccount');
    }

    public function details() {
      return $this->hasOne('App\TwitterDetails');
    }

    public function connected() {
      return isset($this->account);
    }

}
