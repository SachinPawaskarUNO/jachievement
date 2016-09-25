<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class CampaignController extends Controller
{
  public function teammember()
  {
      Log::info('CampaignController.teammember: ');
        $this->viewData['heading'] = "Welcome to My Fundraising Page";
      return view('campaign.teammember', $this->viewData);
      
  }

  public function jointeam()
  {
      Log::info('CampaignController.jointeam: ');
        $this->viewData['heading'] = "Join a Team";
      return view('campaign.jointeam', $this->viewData);
      
  }
}
