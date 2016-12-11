<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\TeamMemberRequest;
use App\Http\Requests\CampaignRequest;
use App\TeamMember;
use App\Team;
use App\User;
use App\Campaign;
use App\Organization;
use Log;
use DB;
use JavaScript;
use Auth;
use Session;
use URL;
use App\Http\Requests\SolicitationRequest;
use Mail;

class CampaignController extends Controller
{
    public function teammember($id)
    {
        Log::info('CampaignController.teammember: ');
        $teamMember = DB::table('team_members')
            ->select('team_members.id', 'team_members.team_id', 'team_members.title', 'team_members.goal', 'team_members.content', 'users.first_name as first_name', 'team_members.user_id', 'team_members.token')
            ->join('users', 'users.id', '=', 'team_members.user_id')
            ->where('team_members.token', '=', $id)
            ->first();
        $team_id = $teamMember->team_id;
        $team = Team::where('id', '=', $team_id)->firstOrFail();
        $user = Auth::user();
        $data['link_show'] = '';
        $data['button_show'] = 'true';
        if ($user) {
            $joinedMemberIfExist = DB::table('team_members')
                ->select('team_members.id')
                ->where('team_members.team_id', '=', $team_id)
                ->where('team_members.user_id', '=', $user->id)
                ->get();
            if ($joinedMemberIfExist) {
                $data['button_show'] = 'false';
            } else {
                $data['button_show'] = 'true';
            }
            if ($user->id == $teamMember->user_id) {
                $data['link_show'] = 'show';
                $data['editable'] = true;
            } else {
                $data['link_show'] = 'hide';
                $data['editable'] = false;
            }
        } else {
            $data['editable'] = false;
        }
        $teammemberDonation = DB::table('donations')
            ->select(DB::raw('COALESCE(sum(donations.amount),0) AS donation_amount'))
            ->join('team_members', 'donations.team_member_id', '=', 'team_members.id')
            ->where('team_members.id', '=', $teamMember->id)
            ->first();
        $teamMembers = DB::table('team_members')
            ->select('users.first_name', 'users.last_name', 'team_members.goal', 'team_members.id', 'team_members.token', DB::raw(
                'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
            ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
            ->join('users', 'team_members.user_id', '=', 'users.id')
            ->where('team_members.team_id', '=', $team_id)
            ->groupBy('users.last_name', 'users.first_name', 'team_members.goal', 'team_members.id', 'team_members.token')
            ->orderBy('per_raised')
            ->get();

        $teamMember->goalNoDecimal = substr($teamMember->goal, 0, strpos($teamMember->goal, '.'));
        $teamMember->current = ($teammemberDonation->donation_amount / $teamMember->goalNoDecimal) * 100;

        JavaScript::put([
            'memberRaised' => ($teammemberDonation->donation_amount == null ? 0 : $teammemberDonation->donation_amount),
            'memberGoal' => $teamMember->goal
        ]);
        return view('event.teammember', compact('teamMember', 'teamMembers', 'teammemberDonation', 'data', 'team'));
    }

    public function joinTeam($teamToken)
    {
        Log::info('CampaignController.joinTeam: ');

        $data['team_token'] = $teamToken;

        $data['action'] = 'join';

        $teamInfo = DB::table('teams')
            ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
            ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
            ->select('teams.id as id', 'teams.name as teamName', 'organizations.name as orgName', 'campaigns.name as campName', 'campaigns.team_member_default_content as campCont')
            ->where('teams.token', '=', $teamToken)
            ->first();

        $data['teamInfo'] = $teamInfo;

        $data['heading'] = 'Join Team ' . $teamInfo->teamName;

        return view('campaign.jointeam', $data);
    }

    public function createTeam($campaignId)
    {
        Log::info('CampaignController.createTeam: ');

        $data['campaignId'] = $campaignId;

        $data['action'] = 'create';

        $campaignInfo = DB::table('campaigns')
            ->select('campaigns.name as campName', 'campaigns.team_default_content as campCont', 'campaigns.team_member_default_content as campPersCont')
            ->where('campaigns.id', '=', $data['campaignId'])
            ->first();

        $data['campaignInfo'] = $campaignInfo;

        $organizationList = DB::table('organizations')
            ->whereNull('organizations.deleted_at')
            ->lists('name', 'id');

        $data['organizationList'] = $organizationList;

        $data['heading'] = 'Create a Team for ' . $campaignInfo->campName;

        return view('campaign.jointeam', $data);
    }

    public function team($id)
    {
        Log::info('CampaignController.team: ');
        // $team = Team::findOrFail(1);
        $team = Team::where('token', $id)->firstOrFail();
        $user = Auth::user();
        $data['link_show'] = '';
        $data['button_show'] = 'true';
        if ($user) {
            $joinedMemberIfExist = DB::table('team_members')
                ->select('team_members.id')
                ->where('team_members.team_id', '=', $team->id)
                ->where('team_members.user_id', '=', $user->id)
                ->get();
            if ($joinedMemberIfExist) {
                $data['button_show'] = 'false';
            } else {
                $data['button_show'] = 'true';
            }
            if ($user->id == $team->user_id) {
                $data['link_show'] = 'show';
            } else {
                $data['link_show'] = 'hide';
            }
            if ($user->id == $team->created_by) {
                $data['editable'] = true;
            } else {
                $data['editable'] = false;
            }
        } else {
            $data['editable'] = false;
        }
        $teamDonation = DB::table('donations')
            ->select(DB::raw('COALESCE(sum(donations.amount),0) AS donation_amount'))
            ->where('donations.team_id', '=', $team->id)
            ->first();

        $teamMembers = DB::table('team_members')
            ->select('users.first_name', 'users.last_name', 'team_members.goal', 'team_members.id', 'team_members.token', DB::raw(
                'SUM(donations.amount) as amount,(SUM(donations.amount)/team_members.goal) * 100 as per_raised'))
            ->leftJoin('donations', 'team_members.id', '=', 'donations.team_member_id')
            ->join('users', 'team_members.user_id', '=', 'users.id')
            ->where('team_members.team_id', '=', $team->id)
            ->groupBy('users.last_name', 'users.first_name', 'team_members.goal', 'team_members.id', 'team_members.token')
            ->orderBy('per_raised')
            ->get();

        $team->goalNoDecimal = substr($team->goal, 0, strpos($team->goal, '.'));
        $team->current = ($teamDonation->donation_amount / $team->goalNoDecimal) * 100;

        JavaScript::put([
            'raised' => ($teamDonation->donation_amount == null ? 0 : $teamDonation->donation_amount),
            'totalGoal' => $team->goal
        ]);
        return view('event.team', compact('teamMembers', 'team', 'teamDonation', 'data'));
    }

    public function joinTeamStore(TeamMemberRequest $request)
    {
        Log::info('CampaignController.joinTeamStore - Start: ');
        $input = $request->all();
        $user = Auth::user();

        $input['token'] = $this->getTeamMemberToken();
        if ($user) {
            $input['user_id'] = $user->id;
        }
        $this->populateCreateFields($input);
        $object = TeamMember::create($input);
        Session::flash('flash_message', 'You have successfully joined the team!');
        Log::info('CampaignController.joinTeamStore - End: ' . $object->id);
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

        if ($input['organization_id'] == 'other') {
            $orgInput['name'] = $input['orgName'];
            $orgInput['url'] = '';

            $this->populateCreateFields($orgInput);
            $orgObject = Organization::create($orgInput);

            Log::info('CampaignController.createTeamStore - Creating New Organization: ' . $orgObject->id);

            $input['organization_id'] = $orgObject->id;
        }

        $this->populateCreateFields($input);
        $object = Team::create($input);
        Session::flash('flash_message', 'Your team was created successfully');
        Log::info('CampaignController.createTeamStore - End: ' . $object->id);

        // Create Team Member when requested on Create Team page
        if (array_key_exists('createMember', $input)) {
            Log::info('CampaignController.joinTeamStoreInCreateTeamStore - Start: ');
            $teamMember = $input;
            unset($input);

            $input['title'] = $teamMember['personalTitle'];
            $input['content'] = $teamMember['personalContent'];
            $input['goal'] = $teamMember['personalGoal'];
            $input['team_id'] = $object->id;
            $input['user_id'] = $teamMember['user_id'];

            $input['token'] = $this->getTeamMemberToken();

            $this->populateCreateFields($input);

            $memberObject = TeamMember::create($input);
            Log::info('CampaignController.joinTeamStoreInCreateTeamStore - End: ' . $memberObject->id);
        }

        return redirect()->action('CampaignController@team', ['id' => $object->token]);
    }

    public function eventMarketing()
    {
        Log::info('CampaignController.eventMarketing: ');


        $events = DB::table('campaigns')
            ->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.image as image, campaigns.event_date as event_date, campaigns.venue as venue, campaigns.deleted_at as deleted_at, campaigns.active as active, campaigns.create_team as create_team'))
            ->whereNull('campaigns.deleted_at')
            ->get();

        return view('event.eventmarketing', compact('events'));
    }

    public function eventDetail($campaignId)
    {
        Log::info('CampaignController.eventDetail: ');
        $data['campaignId'] = $campaignId;

        $details = DB::table('campaigns')
            ->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.description as description, campaigns.image as image, campaigns.email as email, campaigns.phone as phone, campaigns.event_date as event_date, campaigns.venue as venue, campaigns.active as active, campaigns.create_team as create_team'))
            ->where('campaigns.id', '=', $data['campaignId'])
            ->get();

        return view('event.eventdetail', compact('details'));

    }


    public function teamView()
    {
        Log::info('CampaignController.teamView: ');
        $loginUser = Auth::user()->id;

        if ($loginUser) {
            $teamIndividuals = DB::table('teams')
                ->join('team_members', 'teams.id', '=', 'team_members.team_id')
                ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal, teams.title as teamtitle,teams.token as teamtoken'))
                ->where('team_members.user_id', '=', $loginUser)
                ->get();
            $teamInfo = DB::table('teams')
                ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal,teams.created_at as teamdate,teams.title as teamtitle,teams.token as teamtoken'))
                ->where('teams.user_id', '=', $loginUser)
                ->get();
        }

        return view('campaign.teamview', compact('teamInfo', 'teamIndividuals'));

    }


    public function sendmail(SolicitationRequest $request)
    {
        $data = array(
            'teamname' => $request->teamname,
            'email' => $request->email,
            'user_message' => $request->user_message,
            'url' => $request->url,
            'token' => $request->token,
            'id' => $request->id,
            'user' => Auth::user(),
            'firstname' => Auth::user()->first_name,
            'lastname' => Auth::user()->last_name,
            'verifyTeam' => $request->verifyTeam
        );
        $to = explode(',', str_replace(';', ',', str_replace(' ', ',', $request->email)));
        foreach ($to as $receipt) {

            Mail::send('event.solicitationform', $data, function ($message) use ($receipt, $request) {
                $message->from('juniorachievement.midlands@gmail.com', 'Junior Achievement of Midlands, Inc');
                $message->bcc($receipt)->subject('Invitation for Family and Friends of Junior Achievement');;
            });
        }
        \Session::flash('flash_message', 'Your solicitation request was sent successfully!');
        return redirect()->action('CampaignController@team', ['id' => $request->token]);
    }

    public function sendmailmember(SolicitationRequest $request)
    {
        $teamMemberToken = null;
        $data = array(
            'teamname' => $request->teamname,
            'email' => $request->email,
            'user_message' => $request->user_message,
            'url' => $request->url,
            'token' => $request->token,
            'id' => $request->id,
            'user' => Auth::user(),
            'firstname' => Auth::user()->first_name,
            'lastname' => Auth::user()->last_name,
            'verifyTeam' => $request->verifyTeam
        );

        $teamMember = DB::table('team_members')
            ->select('team_members.token')
            ->where('team_members.id', '=', $request->id)
            ->first();
        $teamMemberToken = $teamMember->token;
        $to = explode(',', str_replace(';', ',', str_replace(' ', ',', $request->email)));
        foreach ($to as $receipt) {
            Mail::send('event.solicitationformmember', $data, function ($message) use ($receipt, $request) {
                $message->from('juniorachievement.midlands@gmail.com', 'Junior Achievement of Midlands, Inc');
                $message->bcc($receipt)->subject('Invitation for Family and Friends of Junior Achievement');;
            });
        }
        \Session::flash('flash_message', 'Your solicitation request was sent successfully!');
        return redirect()->action('CampaignController@teammember', ['id' => $teamMemberToken]);
    }

    protected function getTeamMemberToken()
    {
        do {
            $teamMemberToken = str_random(15);
            $tokenCheck = DB::table('team_members')
                ->select(DB::raw('count(*) as count'))
                ->where('team_members.token', '=', $teamMemberToken)
                ->first();
        } while ($tokenCheck->count > 0);

        return $teamMemberToken;
    }

    public function editTeam($token)
    {
        Log::info('CampaignController.editTeam: ');

        $data['action'] = 'create';
        $user = Auth::user()->id;


        $teamInfo = DB::table('teams')
            ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
            ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
            ->select('teams.id as id', 'teams.name as teamName', 'organizations.name as orgName', 'organizations.id as orgId', 'campaigns.name as campName', 'teams.title as title', 'teams.content as content', 'teams.goal as goal', 'campaigns.id as campId', 'teams.created_by as createdUser')
            ->where('teams.token', '=', $token)
            ->first();

        $data['teamInfo'] = $teamInfo;
        $data['token'] = $token;

        if ($user == $teamInfo->createdUser) {
            $data['authorized'] = true;
        } else {
            $data['authorized'] = false;
        }

        $data['heading'] = 'Edit Team: ' . $teamInfo->teamName;

        return view('campaign.editTeam', $data);
    }

    public function editTeamMember($token)
    {
        Log::info('CampaignController.editTeamMember: ');

        $data['action'] = 'join';
        $user = Auth::user()->id;

        $teamInfo = DB::table('team_members')
            ->leftJoin('teams', 'team_members.team_id', '=', 'teams.id')
            ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
            ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
            ->leftJoin('users', 'team_members.user_id', '=', 'users.id')
            ->select('teams.id as teamId', 'teams.name as teamName', 'organizations.name as orgName', 'organizations.id as orgId', 'campaigns.name as campName', 'team_members.id as id', 'team_members.goal as goal', 'team_members.title as title', 'team_members.content as content', 'users.first_name as userFirstName', 'users.last_name as userLastName', 'campaigns.id as campId', 'team_members.user_id as createdUser')
            ->where('team_members.token', '=', $token)
            ->first();

        $data['teamInfo'] = $teamInfo;
        $data['token'] = $token;

        if ($user == $teamInfo->createdUser) {
            $data['authorized'] = true;
        } else {
            $data['authorized'] = false;
        }

        $data['heading'] = 'Edit Team Member: ' . $teamInfo->teamName;

        return view('campaign.editTeam', $data);
    }

    public function updateTeam(TeamRequest $request)
    {
        $input = $request->all();

        Log::info('CampaignController.updateTeam: ' . $input['id'] . '|' . $input['name']);

        DB::table('teams')
            ->where('id', $input['id'])
            ->update(['name' => $input['name'], 'title' => $input['title'], 'content' => $input['content'], 'goal' => $input['goal'], 'updated_by' => Auth::user()->id, 'updated_at' => date_create()]);

        Session::flash('flash_message', 'Team details updated successfully!');

        return redirect()->action('CampaignController@team', ['id' => $input['token']]);
    }

    public function updateTeamMember(TeamMemberRequest $request)
    {
        $input = $request->all();

        Log::info('CampaignController.updateTeamMember: ' . $input['id']);

        DB::table('team_members')
            ->where('id', $input['id'])
            ->update(['title' => $input['title'], 'content' => $input['content'], 'goal' => $input['goal'], 'updated_by' => Auth::user()->id, 'updated_at' => date_create()]);

        Session::flash('flash_message', 'Team Member details updated successfully!');

        return redirect()->action('CampaignController@teammember', ['id' => $input['token']]);
    }
}