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
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, grades.name as gradename'))
            ->get();



       

        
        $elementaryprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, grades.name as gradename'))
                ->where('grade_id','=','1')
                ->get();

        

       
        $middleprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, grades.name as gradename'))
                ->where('grade_id','=','2')
                ->get();


        

        
        $highprograms = DB::table('programs')
                ->join('grades', 'programs.grade_id', '=', 'grades.id')
                ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, grades.name as gradename'))
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