<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DonorRequest;
use App\Http\Requests\DonationRequest;
use App\Donor;
use App\Donation;
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
    public function donate()
    {
        Log::info('DonationController.form: ');
        // $this->viewData['heading'] = "";

               $donors= DB::table('donations')
                    ->select(DB::raw('donors.first_name as firstname, donors.last_name as lastname, sum(donations.amount) as amount'))
                    ->join('donors','donor_id','=','donations.donor_id')
                    ->groupBy('donors.first_name','donors.last_name')
                    ->get();

        return view('donation.donate', compact('donors'));

        // return view('donation.donate', $this->viewData);
    }

    public function store(Request $request)
    {
        Log::info('DonationController.store - Start: ');
        $input = $request->all();
        $this->populateCreateFields($input);
        $object = Donor::create($input);

        $donation = new Donation();
        $lastInsertedForm = Donor::all()->last();
        $donation->donor_id = $lastInsertedForm->id;
        $donation->amount = Input::get('amount');
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
