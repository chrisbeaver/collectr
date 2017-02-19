<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function emails()
    {
    	return $this->hasMany('App\EmailAddress');
    }
}
