<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use DB;
use Auth;

class AboutUsController extends Controller
{
    public function aboutus()
    {

        Log::info('ProgramController.form: ');
        $this->viewData['heading'] = "About Us";
        return view('aboutus.index', $this->viewData);
    }

    public function program()
    {

        Log::info('AboutUsController');

        $allprograms= DB::table('programs')
            ->join('grades','programs.grade_id','=','grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
            ->whereNull('programs.deleted_at')
            ->orderBy ('grade_id','ASC')
            ->orderBy ('name','ASC')
            ->get();

        $elementaryprograms = DB::table('programs')
            ->join('grades', 'programs.grade_id', '=', 'grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
            ->whereNull('programs.deleted_at')
            ->where('grade_id','=','1')
            ->orderBy ('name','ASC')
            ->get();

        $middleprograms = DB::table('programs')
            ->join('grades', 'programs.grade_id', '=', 'grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
            ->whereNull('programs.deleted_at')
            ->where('grade_id','=','2')
            ->orderBy ('name','ASC')
            ->get();

        $highprograms = DB::table('programs')
            ->join('grades', 'programs.grade_id', '=', 'grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
            ->whereNull('programs.deleted_at')
            ->where('grade_id','=','3')
            ->orderBy ('name','ASC')
            ->get();

        return view('programs.view', compact ('allprograms','elementaryprograms','middleprograms','highprograms'));

    }
}

