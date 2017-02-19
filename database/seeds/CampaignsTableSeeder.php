<?php

use Illuminate\Database\Seeder;
use App\Campaign;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campaign::create(['name' => 'Freelance Apprentices', 
        				  'subdomain' => 'apprentice']);
        Campaign::create(['name' => 'Freelance Professionals',
        				  'subdomain' => 'pro']);
    }
}
