<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DonationRequest;
use App\Donor;
use App\Donation;
use App\State;
use DB;
use Auth;
use Log;
use Session;
use Illuminate\Support\Facades\Input;

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

    public function donationform()
    {

        Log::info('DonationController.form: ');

        $defaultSelection = [''=>'Please Select'];

        $states = State::lists('name', 'id')->toArray();
        $states =  $defaultSelection + $states;
        $donors= DB::table('donors')->take(5)
            ->join('donations','donors.id','=','donations.donor_id')
            ->select(DB::raw('left(donors.last_name,1) as lastname, donors.first_name as firstname, sum(donations.amount) as amount'))
            ->groupBy('firstname','lastname')
            ->orderBy('amount','desc')
            ->get();
        return view('donation.donate', compact('states','donors'));
    }
    public function store(DonationRequest $request)
    {
        Log::info('DonationController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $object = Donor::create($input);

        $donation = new Donation();
        $lastInsertedForm = Donor::all()->last();
        $donation->donor_id = $lastInsertedForm->id;
        if (Input::get('amount_actual') != null) {
            $donation->amount = Input::get('amount_actual');
        }
        else {
            $donation->amount = Input::get('amount');
        }

        $donation->date = date('Y-m-d');
        $donation->save();

        Session::flash('flash_message', 'Thank you for your donation');
        Log::info('DonationController.store - End: ' . $object->id);
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
