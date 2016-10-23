<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\TeamMember;
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
                    ->join('donations', 'team_members.id', '=', 'donations.team_member_id')
                    ->join('users', 'team_members.user_id', '=', 'users.id')
                    ->select(DB::raw('team_members.id as id, team_members.goal as goal,donations.amount as amount,users.name as name'))
                    ->get();
        
      return view('campaign.teammember', compact('teamMembers'));
      
  }


  public function jointeam($teamId)
  {
      Log::info('CampaignController.jointeam: ');
      $data['teamId'] = $teamId;

      $teamInfo = DB::table('teams')
                  ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
                  ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
                  ->select('teams.name as teamName', 'organizations.name as orgName', 'campaigns.name as campName')
                  ->where('teams.id', '=', $data['teamId'])
                  ->first();

      $data['teamInfo'] = $teamInfo;

      return view('campaign.jointeam', $data);
      
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

