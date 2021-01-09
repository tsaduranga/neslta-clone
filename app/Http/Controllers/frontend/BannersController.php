<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Log;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannersController extends Controller
{
    public function index()
    {

        //start user details

        $user_details = User::select('username', 'email', 'created_at')->where('id', Auth::id())->first();

        $last_log = Log::where('users_id', Auth::id())->where('status', 1)->orderBy('id', 'desc')->take(2)->get();

        if (count($last_log) < 2) {
            $user_details['last_log'] = "First Time";
        } else {
            $user_details['last_log'] = $last_log[1]['created_at'];
        }

        //end user details

        return view('frontend.banners.index',compact('user_details'));
    }
}
