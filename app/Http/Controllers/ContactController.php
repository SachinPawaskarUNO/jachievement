<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
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
	public function sendmail(ContactFormRequest $request)
    {
        
       $data = array(
			'name' => $request->name,
			'email' => $request->email,
			'phone_number' => $request->phone_number,
            'user_message' => $request->user_message
        );
		
		Mail::send('contactus.emails',$data, function($message)use($request)
    {
        $message->from('juniorachievement.midlands@gmail.com');
		$message->bcc($request->email, $request->name);
        $message->to('juniorachievement.midlands@gmail.com', 'Admin')->subject('Information from Contact Us Page');
    });

	//return Redirect::route('contactus.contactus')->with('message', 'Thanks for contacting us!');
	Session::flash('flash_message', 'Thank you for contacting us! We will contact you soon');
	return view('contactus.contactus');
	}
}
