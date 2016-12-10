<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use Session;
use Mail;
use DB;

class ContactController extends Controller
{
    public function contactus()
    {
        $staticcontents= DB::table('static_contents')
          ->select(DB::raw('item, content'))
          ->where('page','=','Contact Us')
          ->get();
        $contents = array();

        foreach($staticcontents as $static) {
            $contents[$static->item] = $static->content;
        }


        $this->viewData['heading'] = "Contact Us";
        $this->viewData['contents'] = $contents;
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

	Session::flash('flash_message', 'Thank you for contacting us. We will contact you soon');
	return view('contactus.contactus');
	}
}
