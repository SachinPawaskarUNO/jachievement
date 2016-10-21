<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\TeamMember;
use Log;

use Auth;
use Session;

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
      return view('campaign.jointeam');
      
  }

    public function team()
    {
        Log::info('CampaignController.team: ');
        $this->viewData['heading'] = "Welcome to My Fundraising Page";
        return view('campaign.team', $this->viewData);

    }

  public function jointeamstore(TeamRequest $request)
  {
      Log::info('CampaignController.store - Start: ');
      $input = $request->all();
      $user = Auth::user();

      if ($user) {
          $input['user_id'] = $user->id;
      }
      $this->populateCreateFields($input);


      $object = TeamMember::create($input);

      Session::flash('flash_message', 'You have successfully joined the team!');
      Log::info('CampaignController.store - End: ' . $object->id);
      return redirect()->back();
  }

}

