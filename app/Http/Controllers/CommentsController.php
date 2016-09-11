<?php

/**
 * Comments Controller
 *
 * @category   Comments
 * @package    Basic-Controllers
 * @author     Sachin Pawaskar<spawaskar@unomaha.edu>
 * @copyright  2016-2017
 * @license    The MIT License (MIT)
 * @version    GIT: $Id$
 * @since      File available since Release 1.0.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CommentRequest;

use App\Comment;
use App\SkeletalElement;
use Session;
use Auth;


class CommentsController extends Controller
{
    public function __construct()
    {
//        $this->middleware('advisor');

        $this->commentfor = "SkeletalElement";
        $this->skeletalelement = null;
        $this->user = Auth::user();
        $this->commentData = ['user' => $this->user, 'commentfor' => $this->commentfor, 
            'skeletalelement' => $this->skeletalelement
        ];
        
    }

    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function show($id)
    {
        $comment = Comment::findOrfail($id);
        $this->identifyCommentType($comment);

        //dd([$this->commentData]);
        return view('comments.show', $this->commentData);
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(CommentRequest $request)
    {
        $input = $request->all();
        $this->populateCreateFields($input);

        $comment = new Comment($input);
//        dd([$request, $input]);
        if ($input['commentfor'] == "SkeletalElement") {
            $skeletalelement = SkeletalElement::findOrfail($request['se_id']);
            $skeletalelement->comments()->save($comment);
        }

        Session::flash('flash_message', 'Comment successfully added!');
        return redirect()->back();
    }

    public function edit($id)
    {
        $comment = Comment::findOrfail($id);
        $this->identifyCommentType($comment);

//        dd([$this->commentData]);
        return view('comments.edit', $this->commentData);
    }

    public function update($id, CommentRequest $request)
    {
        $comment = Comment::findOrfail($id);
        $this->populateUpdateFields($request);

        $comment->update($request->all());
        Session::flash('flash_message', 'Comment successfully updated!');
        return redirect()->back()->withInput();
    }

    /**
     * Destroy the given comment.
     *
     * @param  Request  $request
     * @param  Comment  $comment
     * @return Response
     */
    public function destroy(Request $request, Comment $comment)
    {
        if ($this->authorize('destroy', $comment))
        {
            $comment->delete();
        }
        return redirect()->back()->withInput();
    }

    public function addforskeletalelement($se_id)
    {
        $skeletalelement = SkeletalElement::findOrfail($se_id);
        $this->commentData['commentfor'] = "SkeletalElement";
        $this->commentData['skeletalelement'] = $skeletalelement;
//        $this->commentData['planofstudy'] = null;

        return view('comments.create', $this->commentData);
    }
//    public function addforplanofstudy($planofstudy_id)
//    {
//        $planofstudy = Planofstudy::findOrfail($planofstudy_id);
//        $this->commentData['commentfor'] = "Planofstudy";
//        $this->commentData['planofstudy'] = $planofstudy;
//        $this->commentData['student'] = null;
//        //dd([$this->commentData]);
//        return view('comments.create', $this->commentData);
//    }

    public function identifyCommentType($comment) {
        if ($comment != null) {
            $this->commentData['comment'] = $comment;
            $this->commentData['skeletalelement'] = null;
//            $this->commentData['planofstudy'] = null;
            if (strpos($comment->commentable_type, 'SkeletalElement') !== false) {
                $this->commentData['commentfor'] = "SkeletalElement";
                $this->commentData['skeletalelement'] = SkeletalElement::findOrfail($comment->commentable_id);
//            } else if (strpos($comment->commentable_type, 'Planofstudy') !== false) {
//                $this->commentData['commentfor'] = "Planofstudy";
//                $this->commentData['planofstudy'] = Planofstudy::findOrfail($comment->commentable_id);
            }
        }
    }
}
