<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Http\Requests\SaveEmailRequest;

class CampaignController extends Controller
{
    public function showLandingPage(Campaign $campaign)
    {
    	return dd($campaign);
    }

    public function showConfirmationPage()
    {
    	
    }

    public function saveEmailAddress(SaveEmailRequest $request)
    {
    	Campaign::create(['campaign_id' => $request->campaign_id,
    					  'email' => $request->email]);
    }
}
