<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model
{
    protected $fillable = ['campaign_id', 'email'];
}
