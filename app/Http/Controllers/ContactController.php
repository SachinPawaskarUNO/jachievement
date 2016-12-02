<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use Session;
use Mail;

class ContactController extends Controller
{
    //
    public function contactus()
    {
        $this->viewData['heading'] = "Contact Us";
        return view('contactus.contactus', $this->viewData);
    }
	public function sendmail(ContactRequest $request)
    {
        
       $data = array(
			'name' => $request->name,
			'email' => $request->email,
			'phone_number' => $request->phone_number,
            'user_message' => $request->user_message
        );
		
		Mail::send('contactus.emails',$data, function($message)use($request)
    {
        $message->from('juniorachievement.midlands@gmail.com', 'Junior Achievement of Midlands, Inc.');
		$message->bcc('juniorachievement.midlands@gmail.com', 'Admin');
		$message->to($request->email, $request->name)->subject('Information from Contact Us Page');
        
    });

	//return Redirect::route('contactus.contactus')->with('message', 'Thanks for contacting us!');
	Session::flash('flash_message', 'Thank you for contacting us! We will contact you soon');
	return view('contactus.contactus');
	}
}
