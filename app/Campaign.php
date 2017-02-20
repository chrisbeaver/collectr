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

    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'subdomain';
	}
}
