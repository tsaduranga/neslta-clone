<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Log;
use App\Package;
use App\Payment_Id;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DepositsController extends Controller
{
    public function new_deposit()
    {
        $user_details = User::select('username', 'email', 'created_at')->where('id', Auth::id())->first();

        $last_log = Log::where('users_id', Auth::id())->where('status', 1)->orderBy('id', 'desc')->take(2)->get();

        if (count($last_log) < 2) {
            $user_details['last_log'] = "First Time";
        } else {
            $user_details['last_log'] = $last_log[1]['created_at'];
        }

        $packages = Package::all();
        return view('frontend.deposits.new_deposit', compact('packages', 'user_details'));
    }



    public function cal_deposite_model($id)
    {
        $package = Package::select('id', 'name')->where('id', $id)->first();
        return view('frontend.deposits.cal_model', compact('package'));
    }

    public function confirm_new_deposit(Request $request)
    {
        // dd($request->all());

        $package_details = Package::find($request->package);
        $min_value = $package_details['amount_min'];
        $max_value = $package_details['amount_max'];

        $request->validate([
            'package' => 'required',
            'amount' => 'required|numeric|min:'.$min_value.'|max:'.$max_value ,
            'processor' => 'required'
        ]);

        $package_id = $request->package;
        $amount = $request->amount;
        $method = $request->processor;


        //User details

        $user_details = User::select('username', 'email', 'created_at')->where('id', Auth::id())->first();

        $last_log = Log::where('users_id', Auth::id())->where('status', 1)->orderBy('id', 'desc')->take(2)->get();

        if (count($last_log) < 2) {
            $user_details['last_log'] = "First Time";
        } else {
            $user_details['last_log'] = $last_log[1]['created_at'];
        }

        //end user details

        if($request->processor == "perfectmoney"){

            $payment_id['users_id'] = Auth::id();
            $payment_id['packages_id'] = $package_id;
            $payment_id['success'] = 0; // 0 mean not success

            $save_payment_id = Payment_Id::create($payment_id);

            $row_id = $save_payment_id->id;

             //update that payment id code
            $payment_id = Payment_Id::find($row_id);
            $data['code'] = Str::random(2) . '-' . Str::random(1) . $row_id . '-' . Str::random(2).'-pm';
            $payment_id->code = $data['code'];
            $payment_id->save();

            //pass data to view

            $payment['payment_id'] = $payment_id->id;
            $payment['payee_account'] = "U25403887";
            $payment['company_name'] = "Test Company";
            $payment['payment_amount'] =$request->amount;
            $payment['payment_unit'] = "USD";
            $payment['package_name'] = $package_details->name;

            $payment['no_payment_url'] = url('/').'/perfectmoney/cancel';
            $payment['payment_url'] = url('/').'/perfectmoney/success';
            $payment['status_url'] = url('/').'/perfectmoney/status';


            return view('frontend.payment-gateway.perfect_money',compact('user_details','payment'));
        }
        // $payment_id['code'] =

        // $save_payment_id = Payment_Id::






    }
}
