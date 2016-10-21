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
use Illuminate\Support\Facades\Mail;

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
        $donors= DB::table('donors')->take(10)
            ->join('donations','donors.id','=','donations.donor_id')
            ->select(DB::raw('left(donors.last_name,1) as lastname, donors.first_name as firstname, 
                              donations.amount as amount, donations.anonymous as anonymous,'))
            ->where('donations.status','paid')
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
        if ($input['state_id'] == '') {
            $input['state_id'] = null;
        }

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
        $donation->status = 'pending';
        $donation->date = date('Y-m-d');

        $floatAmount = floatval(str_replace(',', '', $amount));

        $params = array( 
            'cancelUrl' => 'http://jachievement.herokuapp.com/donation/donate', 
            'returnUrl' => 'http://jachievement.herokuapp.com/donation/donate', 
            'amount' => $floatAmount
        );

        $data = array(
            'first_name'=>Input::get('first_name'),
            'email' => Input::get('email')

        );

        Mail::send('donation.emails',$data, function($message)use($input)
        {

            $message->from('juniorachievement.midlands@gmail.com');
            $message->to(Input::get('email'))->subject('Thank you for Donation');

        });

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
            $donation->status = 'paid';
            $donation->save();
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
