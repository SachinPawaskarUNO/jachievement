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
use Omnipay\Omnipay; 

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

        //$defaultSelection = [''=>'None1'];

        $states = State::lists('name', 'id')->toArray();
        //$states =  $defaultSelection + $states;
        $donors= DB::table('donors')->take(10)
            ->join('donations','donors.id','=','donations.donor_id')
            ->select(DB::raw('left(donors.last_name,1) as lastname, donors.first_name as firstname, donations.amount as amount'))
            ->where('donations.anonymous','no')
            ->orderBy('donations.created_at', 'DESC')
            ->get();


        if (isset($_GET["token"]) && isset($_GET["PayerID"])) {
          Session::flash('flash_message', 'Thank you for your donation');
        }

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
            $amount = Input::get('amount_actual');
        }
        else {
            $amount = Input::get('amount');
        }
        $amount = preg_replace("/[^0-9\.]/", "", $amount);

        $donation->amount = $amount;
        if (Input::get('anonymous') == 1) {
            $donation->anonymous = 'yes';
        }
        else {
            $donation->anonymous = 'no';
        }

        $donation->date = date('Y-m-d');

        $floatAmount = floatval(str_replace(',', '', $amount));

        $params = array( 
            'cancelUrl' => 'http://jachievement.herokuapp.com/donation/donate', 
            'returnUrl' => 'http://jachievement.herokuapp.com/donation/donate', 
            'amount' => $floatAmount
        );

        session()->put('params', $params); // here you save the params to the session so you can use them later.
        session()->save();


        
        $gateway = Omnipay::create('PayPal_Express'); 
        $gateway->setUsername('healey-facilitator_api1.jaomaha.net'); // here you should place the email of the business sandbox account 
        $gateway->setPassword('7GTU6F8W8LZ56V7N'); // here will be the password for the account
        $gateway->setSignature('AFcWxV21C7fd0v3bYYYRCpSSRl31AiAo7kLWmpqON.pHLW8CxeVR-E28'); // and the signature for the account 
        $gateway->setTestMode(true); // set it to true when you develop and when you go to production to false

        $donation->save();
        
        $response = $gateway->purchase($params)->send(); // here you send details to PayPal
        

        if ($response->isRedirect()) { 
            // redirect to offsite payment gateway 
            $response->redirect(); 
         } 
         else { 
            // payment failed: display message to customer 
            echo $response->getMessage();
        } 




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
