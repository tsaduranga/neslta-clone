<?php

namespace App\Http\Controllers\frontend;

use App\Help_Topic;
use App\Http\Controllers\Controller;
use App\Log;
use App\Sub_Ticket;
use App\Ticket;
use App\User;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Str;

class SupportSectionController extends Controller
{


    public function index()
    {

        // User Details     ///
        $user_details = User::select('username', 'email', 'created_at')->where('id', Auth::id())->first();

        $last_log = Log::where('users_id', Auth::id())->where('status', 1)->orderBy('id', 'desc')->take(2)->get();

        if (count($last_log) < 2) {
            $user_details['last_log'] = "First Time";
        } else {
            $user_details['last_log'] = $last_log[1]['created_at'];
        }

        //End User Details //



        $tickets = Ticket::where('users_id', Auth::id())->get();

        foreach ($tickets as $ticket) {
            $help_topic = Help_Topic::select('name')->where('id', $ticket['help_topics_id'])->first();
            $ticket['help_topic'] = $help_topic['name'];
        }

        return view('frontend.supports.index', compact('tickets', 'user_details'));
    }

    public function create()
    {

        $user_details = User::select('username', 'email', 'created_at')->where('id', Auth::id())->first();

        $last_log = Log::where('users_id', Auth::id())->where('status', 1)->orderBy('id', 'desc')->take(2)->get();

        if (count($last_log) < 2) {
            $user_details['last_log'] = "First Time";
        } else {
            $user_details['last_log'] = $last_log[1]['created_at'];
        }



        $help_topics = Help_Topic::all();

        return view('frontend.supports.create', compact('help_topics', 'user_details'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'subject' => 'required|min:3|max:100',
            'message' => 'required|min:5'
        ]);



        //save ticket

        $data['subject'] = $request->subject;
        $data['status'] = 0; // ticket is open
        $data['users_id'] = Auth::id();
        $data['help_topics_id'] = $request->topic;

        $ticket = Ticket::create($data);

        $row_id = $ticket->id;

        //update that ticket code
        $ticket = Ticket::find($row_id);
        $data['code'] = Str::random(2) . '-' . Str::random(1) . $row_id . '-' . Str::random(2);
        $ticket->code = $data['code'];
        $ticket->save();

        //create sub tickets
        $sub_ticket['message'] = $request->message;
        $sub_ticket['from'] = 0;
        $sub_ticket['tickets_id'] = $row_id;

        Sub_Ticket::create($sub_ticket);

        return redirect()->route('frontend.tickets.create');
    }


    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('frontend.supports.show', compact('ticket'));
    }
}
