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
//        dd($id);
        Log::info('CampaignController.teammember: ');
      //$teamMember = TeamMember::where('token','=',$id)->firstOrFail();
      $teamMember= DB::table('team_members')
          ->select('team_members.id','team_members.team_id','team_members.title','team_members.goal','team_members.content','users.first_name as first_name','team_members.user_id','team_members.token')
          ->join('users', 'users.id', '=', 'team_members.user_id')
          ->where('team_members.token', '=' ,$id)
          ->first();
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
        JavaScript::put([
            'memberRaised' => ($teammemberDonation->donation_amount == null ? 0 : $teammemberDonation->donation_amount),
            'memberGoal' => $teamMember->goal
        ]);
        return view('event.teammember', compact('teamMember', 'teamMembers', 'teammemberDonation', 'data', 'team'));
    }

    public function joinTeam($teamToken)
    {
        Log::info('CampaignController.joinTeam: ');
        if (Auth::guest()) {
            Session::flash('warn_flash_message', 'Account Required: Before joining a team, please login or register.');
            return redirect()->guest('login');
        }
        $data['team_token'] = $teamToken;
        $data['action'] = 'join';
        $data['heading'] = 'Join an Event Team';
        $teamInfo = DB::table('teams')
            ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
            ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
            ->select('teams.id as id', 'teams.name as teamName', 'organizations.name as orgName', 'campaigns.name as campName', 'campaigns.default_content as campCont')
            ->where('teams.token', '=', $teamToken)
            ->first();
        $data['teamInfo'] = $teamInfo;
        return view('campaign.jointeam', $data);
    }

    public function createTeam($campaignId)
    {
        Log::info('CampaignController.createTeam: ');
        if (Auth::guest()) {
            Session::flash('warn_flash_message', 'Account Required: Before creating a team, please login or register.');
            return redirect()->guest('login');
        }
        $data['campaignId'] = $campaignId;
        $data['action'] = 'create';
        $data['heading'] = 'Create an Event Team';
        $campaignInfo = DB::table('campaigns')
            ->select('campaigns.name as campName', 'campaigns.default_content as campCont')
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
        }
        $teamDonation = DB::table('donations')
            ->select(DB::raw('sum(donations.amount) as donation_amount'))
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
      $this->populateCreateFields($input);
      $object = Team::create($input);
      Session::flash('flash_message', 'Your team has been created successfully!');
      Log::info('CampaignController.createTeamStore - End: ' . $object->id);

      // Create Team Member when requested on Create Team page
      if (array_key_exists('createMember', $input)){
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
		
		
		$activeevents = DB::table('campaigns')
					->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.image as image, campaigns.event_date as event_date, campaigns.venue as venue, campaigns.default_content as content'))
					->get();


//
//      $data = DB::table('teams')
//            ->leftJoin('organizations', 'teams.organization_id', '=', 'organizations.id')
//            ->leftJoin('campaigns', 'teams.campaign_id', '=', 'campaigns.id')
//            ->select('teams.id as id')
//           //->where('teams.token', '=', $teamToken)
//            ->get();

      return view('event.eventmarketing',compact('activeevents'));
	 // return redirect()->action('CampaignController@eventDetail', ['id' => $campaignid]);
  }

   public function eventDetail($campaignId)
   {
        Log::info('CampaignController.eventDetail: ');
		$data['campaignId'] = $campaignId;
		//$data['action'] = 'eventDetail';
		$details = DB::table('campaigns')
					->select(DB::raw('campaigns.id as id, campaigns.name as name, campaigns.description as description, campaigns.image as image, campaigns.email as email, campaigns.phone as phone, campaigns.event_date as event_date, campaigns.venue as venue,campaigns.default_content as content'))
					->where('campaigns.id', '=', $data['campaignId'])
					->get();
		//$data['details'] = $details;
		return view('event.eventdetail',compact('details'));
		
		
 //       $data['campaignId'] = $campaignId;
 //       $data['action'] = 'create';
 //       $data['heading'] = 'Create a Campaign Team';
 //       $campaignInfo = DB::table('campaigns')
 //           ->select('campaigns.name as campName', 'campaigns.default_content as campCont')
 //           ->where('campaigns.id', '=', $data['campaignId'])
 //           ->first();
 //       $data['campaignInfo'] = $campaignInfo;
 //       $organizationList = DB::table('organizations')
 //           ->whereNull('organizations.deleted_at')
 //           ->lists('name', 'id');
 //       $data['organizationList'] = $organizationList;
 //       return view('campaign.jointeam', $data);
   }
   public function teamView()
  {
      Log::info('CampaignController.teamView: ');
      
      // $campaignInfo = DB::table('campaigns')
      //                 ->select('campaigns.name as campName')
      //                 ->where('campaigns.id', '=', $data['campaignId'])
      //                 ->first();
      // $data['campaignInfo'] = $campaignInfo;
      // $organizationList = DB::table('organizations')
      //                     ->whereNull('organizations.deleted_at')
      //                     ->lists('name', 'id');
      // $data['organizationList'] = $organizationList;
 // $team = Teams::where('token',$user_id)->firstOrFail();
       
    $loginUser = Auth::user()->id;  
  
   if ($loginUser) {
      // $teamInfo= DB::table('teams')
      //       ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal,teams.created_at as teamdate,teams.title as teamtitle,teams.token as teamtoken'))
      //       ->where('teams.user_id', '=', $loginUser)
      //       // ->orderBy('donations.created_at', 'DESC')
      //       ->get();
            $teamIndividuals= DB::table('teams')
            ->join('team_members','teams.id','=','team_members.team_id')
            ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal, teams.title as teamtitle,teams.token as teamtoken'))
            ->where('team_members.user_id', '=', $loginUser)
            ->get();
             $teamInfo= DB::table('teams')
            ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal,teams.created_at as teamdate,teams.title as teamtitle,teams.token as teamtoken'))
            ->where('teams.user_id', '=', $loginUser)
            ->get();
      }
      //   if ($user) {
      // $teamInfo= DB::table('teams')
            
      //       ->select(DB::raw('teams.name as teamname,teams.goal as teamgoal,teams.created_at as teamdate,teams.title as teamtitle'))
      //       ->where('teams.user_id', '=', $loginUser)
      //       // ->orderBy('donations.created_at', 'DESC')
      //       ->get();
      // }
      return view('campaign.teamview',compact('teamInfo','teamIndividuals'));
      
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
                // print $receipt;
                Mail::send('event.solicitationform', $data, function ($message) use ($receipt, $request) {
                    $message->from('juniorachievement.midlands@gmail.com');
                    $message->bcc($receipt, 'Junior Achievement of Midlands, Inc')->subject('Family and Friends with Junior Achievement');;
                    //$message->to($receipt,'AJ')->subject('Family and Friends with Junior Achievement');
                });
            }
            \Session::flash('flash_message', 'Your solicitation request has been sent successfully!');
            return redirect()->action('CampaignController@team', ['id' => $request->token]);
        }

    public function sendmailmember(SolicitationRequest $request)
    {
        $teamMemberToken=null;
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

                    $teamMember=DB::table('team_members')
                            ->select('team_members.token')
                            ->where('team_members.id', '=' ,$request->id)
                            ->first();
                    $teamMemberToken=$teamMember->token;
                    $to = explode(',', str_replace(';', ',', str_replace(' ', ',', $request->email)));
                            foreach ($to as $receipt) {
                                Mail::send('event.solicitationformmember', $data, function ($message) use ($receipt, $request) {
                                    $message->from('juniorachievement.midlands@gmail.com');
                                    $message->bcc($receipt, 'Junior Achievement of Midlands, Inc')->subject('Family and Friends with Junior Achievement');;
                                    //$message->to($receipt,'AJ')->subject('Family and Friends with Junior Achievement');
                                });
                            }
                    \Session::flash('flash_message', 'Your solicitation request has been sent successfully!');
                    return redirect()->action('CampaignController@teammember', ['id' =>$teamMemberToken]);
                      }

    protected function getTeamMemberToken() {
      do {
            $teamMemberToken = str_random(15);
            $tokenCheck = DB::table('team_members')
                ->select(DB::raw('count(*) as count'))
                ->where('team_members.token', '=', $teamMemberToken)
                ->first();
        } while ($tokenCheck->count > 0);

        return $teamMemberToken;
    }

//    public function __construct()
//    {
//        $this->middleware('role:admin');
//
//        $this->user = Auth::user();
//        $this->campaigns = Campaign::all();
//        $this->heading = "Events";
//
//        $this->viewData = [ 'user' => $this->user, 'events' => $this->events, 'heading' => $this->heading ];
//    }

    public function index() {
        Log::info('CampaignController.index: Start -');

        $campaigns = Campaign::all();
        $this->viewData['events'] = $campaigns;

        return view('event.indexevent', $this->viewData);
    }

    public function create()
    {
        Log::info('CampaignController.create: ');
        $this->viewData['heading'] = "New School";

        return view('event.createevent', $this->viewData);
    }

    public function edit(Campaign $campaigns)
    {
        $object = $campaigns;
        Log::info('CampaignController.edit: '.$object->id.'|'.$object->name);
        $this->viewData['event'] = $object;
        $this->viewData['heading'] = "Edit Event: ".$object->name;

        return view('event.editevent', $this->viewData);
    }

    public function update(Campaign $campaigns, CampaignRequest $request)
    {
        $object = $campaigns;
        Log::info('CampaignController.update - Start: '.$object->id.'|'.$object->name);
        $this->populateUpdateFields($request);
        $request['active'] = $request['active'] == '' ? false : true;

        $object->update($request->all());
        Session::flash('flash_message', 'Event successfully updated!');
        Log::info('CampaignController.update - End: '.$object->id.'|'.$object->name);
        return redirect('/event');
    }
    public function store(CampaignRequest $request)
    {
        Log::info('CampaignController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $input['active'] = $request['active'] == '' ? false : true;
        $object = Campaign::create($input);
        Session::flash('flash_message', 'Event successfully added!');
        Log::info('CampaignController.store - End: '.$object->id.'|'.$object->name);
        return redirect('/event');
    }

    public function destroy(Request $request, Campaign $campaigns)
    {
        $object = $campaigns;
        Log::info('CampaignController.destroy: Start: '.$object->id.'|'.$object->name);
        if ($this->authorize('destroy', $object))
        {
            Log::info('Authorization successful');
            $object->delete();
            Session::flash('flash_message', 'Event successfully deleted!');
        }
        Log::info('CampaignController.destroy: End: ');
        return redirect('/event');
    }
}