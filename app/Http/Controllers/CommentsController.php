<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use DB;
use App\Comment;
use App\Program;
use App\SkeletalElement;
use Session;
use Auth;
class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|superadmin');
        $this->commentfor = "SkeletalElement";
        $this->skeletalelement = null;
        $this->user = Auth::user();
        $this->commentData = ['user' => $this->user, 'commentfor' => $this->commentfor, 
            'skeletalelement' => $this->skeletalelement
        ];
        
    }
    public function index()
    {
        $comments_data= DB::table('comments')
            ->select(DB::raw('comments.id, comments.text, comments.status,comments.created_at, users.first_name, users.last_name,
            programs.name as program_name ,array_to_string(array_agg(roles.name), \',\') as role_name'))
            ->join('programs','comments.program_id','=','programs.id')
            ->join('users','users.id','=','comments.user_id')
            ->join('role_user','role_user.user_id','=','users.id')
            ->join('roles','roles.id','=','role_user.role_id')
            ->groupBy('comments.id', 'comments.text', 'comments.status','comments.created_at', 'users.first_name','users.last_name','program_name')
            ->orderBy('comments.created_at','DESC')
            ->get();

        return view('comments.index', compact('comments_data'));
		
	}
	
	public function accept($id)
	{
			$comment = Comment::findOrfail($id);
			$comment->status = 2;
			$comment->update();
        return redirect()->back();
	}
    public function reject($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->status = 3;
        $comment->update();
        return redirect()->back();
    }
    public function show($id)
    {
        $comment = Comment::findOrfail($id);
        $this->identifyCommentType($comment);
        return view('comments.show', $this->commentData);
    }
    public function create()
    {
        $user = Auth::user;
        $comments = DB::table('comments')
            ->select('comments.*,users.first_name')
            ->join('programs','comments.program_id','=','programs.id')
            ->join('users','user.id','=','comments.user_id')
            ->where('role_user','role_user.role_id','=',$role_id)
            ->get();
        return view('comments.create');
    }

    /**
     * Destroy the given comment.
     *
     * @param  Request  $request
     * @param  Comment  $comment
     * @return Response
     */
    public function destroy($id)
    {DB::table('comments')
            ->select('comments.*')
            ->where('comments.id', '=', $id)
            ->delete();

        Session::flash('flash_message', 'Comment was deleted!');
        return redirect()->back()->withInput();
    }
}
