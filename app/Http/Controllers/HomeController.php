<?php

/**
 * Home Controller
 *
 * @category   Home
 * @package    Basic-Controllers
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            if ($user->hasRole('admin'))
                return view('carousel', compact('user'));
            elseif ($user->hasRole('student'))
                return view('carousel', compact('user'));
            else
                return view('home', compact('user'));
        }
    }
	
    public function home()
    {
        /*
        $staticcontents= collect(DB::table('static_contents')
            ->select(DB::raw('item, content'))
            ->where('page','=','Home Page')
            ->get())->keyBy('item');
*/
            $staticcontents= DB::table('static_contents')
            ->select(DB::raw('item, content'))
            ->where('page','=','Home Page')
            ->get();

            $contents = array();

            $content_1 = '';

            foreach($staticcontents as $static) {
                $contents[$static->item] = $static->content;
                $content_1 = $content_1 . $static->content;
            }


      return view('welcome', compact('contents'));
    }

}
