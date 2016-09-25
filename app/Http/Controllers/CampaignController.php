<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class CampaignController extends Controller
{
  public function teammember()
  {
      Log::info('CampaignController.form: ');
        $this->viewData['heading'] = "Welcome to My Fundraising Page";
      return view('campaign.teammember', $this->viewData);
      
  }
}
