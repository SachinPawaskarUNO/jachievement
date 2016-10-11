<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

use App\Http\Requests;

use Log;
use Session;

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
        Log::info('DonationController.store - Start: ');
        $input = $request->all();

        $this->populateCreateFields($input);


        $object = Donation::create($input);

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
