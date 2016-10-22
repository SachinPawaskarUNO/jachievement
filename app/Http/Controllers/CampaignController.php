<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\TeamMember;
use App\User;
use Log;
use DB;

use Auth;
use Session;

class CampaignController extends Controller
{
  public function teammember()
  {
      Log::info('CampaignController.team_member: ');
        $teamMembers= DB::table('team_members')
                    ->select(DB::raw('users.name as name, team_members.goal as goal,
                    sum(donations.amount) as amount,(sum(donations.amount)/team_members.goal) * 100 as per_raised'))
                    ->join('donations', 'team_members.id', '=', 'donations.team_member_id')
                    ->join('users', 'team_members.user_id', '=', 'users.id')
                    ->groupBy('users.name', 'team_members.goal')
                    ->orderBy('per_raised')
                    ->get();

        
      return view('campaign.teammember', compact('teamMembers'));
      
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

