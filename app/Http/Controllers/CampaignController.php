<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use DB;

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


  public function jointeam()
  {
      Log::info('CampaignController.jointeam: ');
        $this->viewData['heading'] = "Join a Team";
      return view('campaign.jointeam', $this->viewData);
      
  }

    public function team()
    {
        Log::info('CampaignController.team: ');
        $this->viewData['heading'] = "Welcome to My Fundraising Page";
        return view('campaign.team', $this->viewData);

    }

}

