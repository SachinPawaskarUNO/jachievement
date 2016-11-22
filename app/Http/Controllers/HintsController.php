<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Http\Requests;
use App\Http\Requests\HintsRequest;
use Illuminate\Http\Request;
use DB;
use App\Program;
use Session;
use Auth;
use App\SkeletalElement;
use Log;
use App\Role;


class HintsController extends Controller
{
	public function __construct()
    {
//        $this->middleware('advisor');
    	$this->middleware('role:volunteer');
        $this->commentfor = "SkeletalElement";
        $this->skeletalelement = null;
        $this->user = Auth::user();
        $this->commentData = ['user' => $this->user, 'commentfor' => $this->commentfor, 
            'skeletalelement' => $this->skeletalelement
        ];
        
    }

	public function view()
    {

        // $role = Role::user();
        $comments_data1 = DB::table('comments')
            ->join('users','comments.user_id','=','users.id')
            ->join('programs','comments.program_id','=','programs.id') 
            ->join('role_user','comments.user_id','=','role_user.user_id')  
            ->join('roles','role_user.role_id','=','roles.id')           
            ->select('comments.*','users.first_name','programs.name')
            ->where('comments.active','=',1)
            // ->where('roles.name','=','volunteer')
            ->orderBy('comments.created_at','DESC')

            ->get();
        $defaultSelection = [''=>'Please Select Programs'];
        $programs = Program::lists('name', 'id')->toArray();
        $programs =  $defaultSelection + $programs;



        return view('comments.view',compact('comments_data1','programs'));
    }


    public function store(HintsRequest $request)
    {
        // Log::info('HintsController.store - Start: ');
        $input = $request->all();
        $user = Auth::user();
        // return $request;

        $input['user_id'] = $user->id;
        $input['commentable_id'] = 0;
        $input['commentable_type'] = 'Test';
        $this->populateUpdateFields($request);
         // Log::info('HintsController.store - Input:'.implode('|',$input));

        $object = Comment::create($input);

         // Log::info('HintsController.store - Object: '.$object->id);


        Session::flash('flash_message', 'Comment successfully saved! Comment has to be reviewed by admin before being displayed');
        return redirect()->back();
    }
}
