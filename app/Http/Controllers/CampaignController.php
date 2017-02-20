<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\EmailAddress;
use App\Http\Requests\SaveEmailRequest;

class CampaignController extends Controller
{
    public function showLandingPage(Campaign $campaign)
    {
    	return view($campaign->subdomain.'.index', compact('campaign'));
    }

    public function showConfirmationPage(Campaign $campaign, EmailAddress $email)
    {
    	return dd($email);
    	// return view($campaign.'.confirmation');
    }

    public function saveEmailAddress(Campaign $campaign, SaveEmailRequest $request)
    {
    	$email = EmailAddress::create(['email' => $request->email,
    								   'campaign_id' => $campaign->id]);
    	
    	return redirect()->action('CampaignController@showConfirmationPage', compact('campaign','email'));
    }
}
