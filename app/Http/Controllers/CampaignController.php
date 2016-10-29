<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\TeamMemberRequest;
use App\TeamMember;
use App\Team;
use App\User;
use Log;
use DB;

use Auth;
use Session;

class CampaignController extends Controller
{
  public function teammember($id)
  {
      Log::info('CampaignController.teammember: ');

      //$teamMember = TeamMember::findOrFail($id);
      $teamMember = TeamMember::where('token','=',$id)->firstOrFail();
      $team_id = $teamMember->team_id;
      $team = Team::where('id', '=', $team_id)->firstOrFail();

      $user = Auth::user();
      $data['link_show']='';
      $data['button_show']= 'true';

      if ($user) {
          $joinedMemberIfExist = DB::table('team_members')
              ->select('team_members.id')
              ->where('team_members.team_id', '=' ,$team_id)
              ->where('team_members.user_id', '=', $user->id)
              ->get();

          if($joinedMemberIfExist){
              $data['button_show'] = 'false';
          } else {
              $data['button_show'] = 'true';
          }

          if($user->id == $teamMember->user_id)
          {
              $data['link_show'] = 'show';
          } else {
              $data['link_show'] = 'hide';
          }

      }

      $teammemberDonation = DB::table('donations')
          ->select(DB::raw('sum(donations.amount) as donation_amount'))
          ->join('team_members', 'donations.team_member_id', '=', 'team_members.id')
          ->where('team_members.id', '=' ,$teamMember->id)
          ->get();

      $teamMembers= DB::table('team_members')
          ->select('users.first_name', 'users.last_name', 'team_members.goal', 'team_members.id', 'team_members.token', DB::raw(
              'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
          ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
          ->join('users', 'team_members.user_id', '=', 'users.id')
          ->where('team_members.team_id', '=', $team_id)
          ->groupBy('users.last_name', 'users.first_name', 'team_members.goal', 'team_members.id', 'team_members.token')
          ->orderBy('per_raised')
          ->get();

      return view('campaign.teammember', compact('teamMember','teamMembers','teammemberDonation','data','team'));
      
  }


  public function joinTeam($teamToken)
  {
      Log::info('CampaignController.joinTeam: ');
      $data['team_token'] = $teamToken;
      $data['action'] = 'join';
      $data['heading'] = 'Join a Campaign Team';

      $teamInfo = DB::table('teams')
                  ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
                  ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
                  ->select('teams.id as id', 'teams.name as teamName', 'organizations.name as orgName', 'campaigns.name as campName')
                  ->where('teams.token', '=', $teamToken)
                  ->first();

      $data['teamInfo'] = $teamInfo;

      return view('campaign.jointeam', $data);
      
  }

  public function createTeam($campaignId)
  {
      Log::info('CampaignController.createTeam: ');
      $data['campaignId'] = $campaignId;
      $data['action'] = 'create';
      $data['heading'] = 'Create a Campaign Team';


      $campaignInfo = DB::table('campaigns')
                      ->select('campaigns.name as campName')
                      ->where('campaigns.id', '=', $data['campaignId'])
                      ->first();

      $data['campaignInfo'] = $campaignInfo;

      $organizationList = DB::table('organizations')
                          ->whereNull('organizations.deleted_at')
                          ->lists('name', 'id');

      $data['organizationList'] = $organizationList;

      return view('campaign.jointeam', $data);
      
  }

    public function team($id)
    {
        Log::info('CampaignController.team: ');
      // $team = Team::findOrFail(1);
        $team = Team::where('token',$id)->firstOrFail();


        $user = Auth::user();
        $data['link_show']='';
        $data['button_show']= 'true';

        if ($user) {
            $joinedMemberIfExist = DB::table('team_members')
                ->select('team_members.id')
                ->where('team_members.team_id', '=' ,$team->id)
                ->where('team_members.user_id', '=', $user->id)
                ->get();

            if($joinedMemberIfExist){
                $data['button_show'] = 'false';
            } else {
                $data['button_show'] = 'true';
            }

            if($user->id == $team->user_id)
            {
                $data['link_show'] = 'show';
            } else {
                $data['link_show'] = 'hide';
            }

        }

        $teamDonation = DB::table('donations')
            ->select(DB::raw('sum(donations.amount) as donation_amount'))
            ->join('teams', 'donations.team_id', '=', 'teams.id')
            ->where('teams.id', '=' ,$team->id)
            ->get();

        $teamMembers= DB::table('team_members')
            ->select('users.first_name', 'users.last_name', 'team_members.goal', 'team_members.id', 'team_members.token', DB::raw(
                'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
            ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
            ->join('users', 'team_members.user_id', '=', 'users.id')
            ->where('team_members.team_id', '=', $team->id)
            ->groupBy('users.last_name', 'users.first_name', 'team_members.goal', 'team_members.id', 'team_members.token')
            ->orderBy('per_raised')
            ->get();


        return view('campaign.team', compact('teamMembers','team','teamDonation','data'));

    }

  public function joinTeamStore(TeamMemberRequest $request)
  {
      Log::info('CampaignController.joinTeamStore - Start: ');
      $input = $request->all();
      $user = Auth::user();

      do {
        $teamMemberToken = str_random(15);

        $tokenCheck = DB::table('team_members')
                      ->select(DB::raw('count(*) as count'))
                      ->where('team_members.token', '=', $teamMemberToken)
                      ->first();
      } while ($tokenCheck->count > 0);

      $input['token'] = $teamMemberToken;

      if ($user) {
          $input['user_id'] = $user->id;
      }
      $this->populateCreateFields($input);

      $object = TeamMember::create($input);

      Session::flash('flash_message', 'You have successfully joined the team!');
      Log::info('CampaignController.store - End: ' . $object->id);
      return redirect()->action('CampaignController@teammember', ['id' => $object->token]);
  }

  public function createTeamStore(TeamRequest $request)
  {
      Log::info('CampaignController.createTeamStore - Start: ');
      $input = $request->all();
      $user = Auth::user();

      do {
        $teamToken = str_random(15);

        $tokenCheck = DB::table('teams')
                      ->select(DB::raw('count(*) as count'))
                      ->where('teams.token', '=', $teamToken)
                      ->first();
      } while ($tokenCheck->count > 0);

      $input['token'] = $teamToken;

      if ($user) {
          $input['user_id'] = $user->id;
      }
      $this->populateCreateFields($input);

      $object = Team::create($input);

      Session::flash('flash_message', 'Your team has been created successfully!');
      Log::info('CampaignController.store - End: ' . $object->id);
      return redirect()->action('CampaignController@team', ['id' => $object->token]);
  }
  
  public function active()
  {
		Log::info('CampaignController.active: ');
		
		$activecampaigns = DB::table('campaigns')
					->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.description as description, campaigns.start_date as start_date, campaigns.end_date as end_date'))
					//->where('active', '=','1')
					//->whereBetween([campaigns.start_date, campaigns.end_date])
					->get();
		
		
		//$this->viewData['heading'] = "Active Campaigns";
       return view('campaign.activecampaign',compact('activecampaigns'));
		//return view('campaign.activecampaign', $this->viewData);
  
  }
}

