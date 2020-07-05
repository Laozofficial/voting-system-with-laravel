<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Option;
use App\Vote;
USE App\Comment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('admin.pages.home');
        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.pages.home');
    }

    public function addPoll()
    {
        return view('admin.pages.add-poll');
    }

    public function savePoll(Request $request)
    {
        $poll = new Poll;
        $poll->user_id = Auth::user()->id;
        $poll->poll = $request->get('poll');
        $poll->save();

        return response()->json([
            'poll_id' => $poll->id,
            'success' => 'Poll Added successfully'
        ]);
    }

    public function saveOption(Request $request, $id)
    {
        $option = new Option;
        $option->poll_id = $id;
        $option->option = $request->get('option');
        $option->save();

        $options = Option::where('poll_id', $id)->get();

        return response()->json([
            'options' => $options,
            'success' => 'option added successfully'
        ]);
    }

    public function deleteOption($id)
    {
        $option = Option::findOrFail($id);

        $option->delete();

        return response()->json([
            'success' => 'option deleted successfully'
        ]);
    }

    public function getPolls()
    {
        $polls = Poll::with(['user', 'options','votes'])
        ->orderBy('id','desc')
        ->get();

        return response()->json([
            'polls' => $polls
        ]);
    }

    public function getUserPolls()
    {
        $polls = Poll::where('user_id', Auth::user()->id)
        ->with(['user', 'options','votes'])
        ->orderBy('id','desc')
        ->get();

        return response()->json([
            'polls' => $polls
        ]);
    }

    public function deletePoll($id)
    {
        $poll = Poll::findOrFail($id);

        $poll->delete();

        return response()->json([
            'success' => 'the poll has been sucessfully deleted'
        ]);
    }

    public function getPollOptions($id)
    {
        $options = Option::where('poll_id', $id)->with(['poll', 'votes'])->get();

        return response()->json([
            'options' => $options
        ]);
    }

    public function fetchPoll()
    {
        $polls = Poll::with(['user', 'options', 'votes'])
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->get();

        return response()->json([
            'polls' => $polls
        ]);
    }

    public function storeVote($id)
    {
        
        $option = Option::where('id', $id)->first();

        $check = Vote::where('user_id', Auth::user()->id)
        ->where('poll_id', $option->poll_id)
        ->first();

        if($check){
            return response()->json([
                'message' => 'you have already voted'
            ]);
        }

        $vote = new Vote;
        $vote->user_id = Auth::user()->id;
        $vote->poll_id = $option->poll_id;
        $vote->option_id = $id;
        $vote->save();

        return response()->json([
            'message' => 'vote counted'
        ]);
    }

    public function saveComments(Request $request)
    {
        $comments = new Comment;
        $comments->poll_id = $request->get('poll_id');
        $comments->comments = $request->get('comments');
        $comments->save();

        return response()->json([
            'success' => 'comment has been added'
        ]);
    }
}
