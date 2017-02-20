<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
	protected $fillable = ['name', 'subdomain'];
	
    public function emails()
    {
    	return $this->hasMany('App\EmailAddress');
    }
}
