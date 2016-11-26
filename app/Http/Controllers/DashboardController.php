<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function __construct() {
    	$this->middleware('role:admin|superadmin');

    	date_default_timezone_set('America/Chicago');
    }

    public function index() {
    	$this->viewers = DB::select("SELECT COUNT(distinct client_ip) as viewersCount FROM tracker_sessions WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

    	$this->donations = DB::select("SELECT SUM(amount) as donateCount FROM donations WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

    	$this->hintsCount = DB::select("SELECT COUNT(*) as hintsCount FROM comments WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

    	$this->volunteerFormCount = DB::select("SELECT COUNT(*) as interestForms FROM volunteer_interest_forms WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

    	$this->educatorFormCount = DB::select("SELECT COUNT(*) as interestForms FROM educator_interest_forms WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

    	$this->endDate = (new \DateTime())->format('Y-m-d');

    	$this->heading = "Administration Dashboard";

    	$this->viewData = [ 'heading' => $this->heading, 'viewers' => $this->viewers[0]->viewersCount, 'donations' => $this->donations[0]->donateCount, 'hintsCount' => $this->hintsCount[0]->hintsCount, 'volunteerFormCount' => $this->volunteerFormCount[0]->interestForms, 'educatorFormCount' => $this->educatorFormCount[0]->interestForms ];

    	return view('dashboard.index', $this->viewData);
    }

    public function visitors() {
    	$this->viewers = DB::select("SELECT tracker_sessions.id, tracker_sessions.uuid, (SELECT email from users where users.id = tracker_sessions.user_id) as user, tracker_sessions.client_ip, tracker_sessions.created_at, tracker_sessions.updated_at, tracker_devices.kind as device_kind, tracker_devices.model as device_model, tracker_devices.platform as device_platform, tracker_devices.platform_version as device_platform_model, tracker_devices.is_mobile as device_is_mobile, tracker_agents.name as agent_name, tracker_agents.browser as agent_browser, tracker_agents.browser_version as agent_browser_version FROM tracker_sessions LEFT JOIN tracker_devices on tracker_devices.id = tracker_sessions.device_id LEFT JOIN tracker_agents on tracker_agents.id = tracker_sessions.agent_id");

    	$this->heading = "Visitor Details";

    	//dd($this->viewers);

    	$this->viewData = [ 'heading' => $this->heading, 'viewers' => $this->viewers ];

    	return view('dashboard.visitors', $this->viewData);
    }
}
