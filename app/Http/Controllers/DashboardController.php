<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');

        date_default_timezone_set('America/Chicago');
    }

    public function index()
    {
        $this->viewers = DB::select("SELECT COUNT(distinct client_ip) as viewerscount FROM tracker_sessions WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

        $this->donations = DB::select("SELECT SUM(amount) as donatecount FROM donations WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

        $this->hintsCount = DB::select("SELECT COUNT(*) as hintscount FROM comments WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

        $this->volunteerFormCount = DB::select("SELECT COUNT(*) as interestforms FROM volunteer_interest_forms WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

        $this->educatorFormCount = DB::select("SELECT COUNT(*) as interestforms FROM educator_interest_forms WHERE EXTRACT(WEEK FROM created_at) = EXTRACT(WEEK FROM NOW())");

        $this->pageViewsArray = array();

        for ($i = 6; $i >= 0; $i--) {
            $this->date = date('Y-m-d', time() - $i * 60 * 60 * 24);

            $this->pageViews = DB::select("SELECT DATE(created_at) as dt, COUNT(*) as views FROM tracker_log WHERE DATE(created_at) = '" . $this->date . "' GROUP BY dt");

            if ($this->pageViews) {
                $this->tempArray = array();

                $this->tempArray['dt'] = $this->date;
                $this->tempArray['count'] = $this->pageViews[0]->views;

                array_push($this->pageViewsArray, $this->tempArray);
            } else {
                $this->tempArray = array();

                $this->tempArray['dt'] = $this->date;
                $this->tempArray['count'] = 0;

                array_push($this->pageViewsArray, $this->tempArray);
            }

        }

        $this->heading = "Administration Dashboard";

        $this->viewData = ['heading' => $this->heading, 'viewers' => $this->viewers[0]->viewerscount, 'donations' => $this->donations[0]->donatecount, 'hintsCount' => $this->hintsCount[0]->hintscount, 'volunteerFormCount' => $this->volunteerFormCount[0]->interestforms, 'educatorFormCount' => $this->educatorFormCount[0]->interestforms, 'pageViewsData' => $this->pageViewsArray];

        return view('dashboard.index', $this->viewData);
    }

    public function visitors()
    {
        $this->viewers = DB::select("SELECT tracker_sessions.id, tracker_sessions.uuid, (SELECT email from users where users.id = tracker_sessions.user_id) as user, tracker_sessions.client_ip, tracker_sessions.created_at, tracker_sessions.updated_at, tracker_devices.kind as device_kind, tracker_devices.model as device_model, tracker_devices.platform as device_platform, tracker_devices.platform_version as device_platform_model, tracker_devices.is_mobile as device_is_mobile, tracker_agents.name as agent_name, tracker_agents.browser as agent_browser, tracker_agents.browser_version as agent_browser_version FROM tracker_sessions LEFT JOIN tracker_devices on tracker_devices.id = tracker_sessions.device_id LEFT JOIN tracker_agents on tracker_agents.id = tracker_sessions.agent_id");

        $this->heading = "Visitor Details";
        $this->viewData = ['heading' => $this->heading, 'viewers' => $this->viewers];

        return view('dashboard.visitors', $this->viewData);
    }
}