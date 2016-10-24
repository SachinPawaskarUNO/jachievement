<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\VolunteerRequest;
use Log;
use App\VolunteerInterestForm;
use Session;
use DB;
use Auth;

class ProgramController extends Controller
{
    public function program()
    {

        Log::info('ProgramController.form: ');

        $allprograms= DB::table('programs')
            ->join('grades','programs.grade_id','=','grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
            ->get();



       

        
        $elementaryprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
                ->where('grade_id','=','1')
                ->get();

        

       
        $middleprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
                ->where('grade_id','=','2')
                ->get();


        

        
        $highprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, programs.entrepreneurship as entrepreneurship, programs.financial_readiness as financial_readiness, programs.work_readiness as work_readiness, programs.program_url as program_url'))
                ->where('grade_id','=','3')
                ->get();


        

        return view('programs.index', compact ('allprograms','elementaryprograms','middleprograms','highprograms'));
        
    }
}
/**
 * Created by PhpStorm.
 * User: Ruiqi
 * Date: 9/25/2016
 * Time: 3:56 PM
 */