<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;

class CampaignController extends Controller
{
    public function showLandingPage(Campaign $campaign)
    {
    	return dd($campaign);
    }
}
