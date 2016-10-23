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
//        $this->viewData['heading'] = "JA Program";


//        $program = new Program();
//
//        $this->viewData['programs'] = $program->all(array('name','description', 'image','implementation'));


        $programs= DB::table('programs')
            ->join('grades','programs.grade_id','=','grades.id')
            ->select(DB::raw('programs.name as name, programs.description as description, programs.image as image, programs.implementation as implementation, grades.name as gradename'))
            ->get();
        
        return view('programs.index', compact ('programs'));
    }
}
/**
 * Created by PhpStorm.
 * User: Ruiqi
 * Date: 9/25/2016
 * Time: 3:56 PM
 */