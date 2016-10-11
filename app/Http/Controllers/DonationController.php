<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donate()
    {
        Log::info('DonationController.form: ');
        $this->viewData['heading'] = "Donation to Junior Achievement Omaha";
        return view('donation.donate', $this->viewData);
    }

    public function store(Request $request)
    {
        Log::info('InterestformsController.store - Start: ');
        $input = $request->all();

        $user = Auth::user();

        if($user) {
            $input['user_id'] = $user;
        }
        $this->populateCreateFields($input);

        $object = VolunteerInterestForm::create($input);

        $grade_programs1= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','1')
            ->get();


        foreach($grade_programs1 as $program1) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program1->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {

                $volunteerProgram->save();
            }
        }

        $grade_programs2= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','2')
            ->get();

        foreach($grade_programs2 as $program2) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program2->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {

                $volunteerProgram->save();
            }
        }

        $grade_programs3= DB::table('programs')
            ->select(DB::raw('programs.id as program_id, programs.name as program_name'))
            ->where('grade_id','=','3')
            ->get();

        foreach($grade_programs3 as $program3) {
            $volunteerProgram = new VolunteerProgram();
            $lastInsertedForm = VolunteerInterestForm::all()->last();
            $volunteerProgram->volunteerform_id = $lastInsertedForm->id;
            $choice = "program_choice_" .$program3->program_id;
            $volunteerProgram->program_id = $request->$choice * 1;
            if(($volunteerProgram->program_id)!=0) {
                $volunteerProgram->save();
            }
        }

        Session::flash('flash_message', 'Thank you for registering as a Volunteer! We will contact you soon');
        // Log::info('InterestformsController.store - End: '.$object->id);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
