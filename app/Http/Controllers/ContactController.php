<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    //
    public function contactus()
    {
        $this->viewData['heading'] = "Contact Us";
        return view('contactus.contactus', $this->viewData);
    }
	//public function store()
    //{
        //$this->viewData['heading'] = "Contact Us";
        //return view('contactus.contactus', $this->viewData);
	//}
}
