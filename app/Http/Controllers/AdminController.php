<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Option;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function admin()
    {
        return view('admin.pages.admin');
    }

    public function activatePoll($id)
    {
        $poll = Poll::where('id', $id)->first();

        $poll->status = 1;
        $poll->save();

        return response()->json([
            'success' => 'poll has been successfully activated'
        ]);
    }

    public function killPoll($id)
    {
        $poll = Poll::where('id', $id)->first();

        $poll->status = 0;
        $poll->save();

        return response()->json([
            'success' => 'poll has been successfully de-activated'
        ]);
    }

    public function getComments($id)
    {
        $comments = Comment::where('poll_id', $id)->get();

        return response()->json([
            'comments' => $comments
        ]);
    }
}
