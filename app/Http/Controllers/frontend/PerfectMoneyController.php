<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfectMoneyController extends Controller
{
    public function status(){


        $secret = strtoupper( md5('7ls59EgN28axJkLEkzRchyPCz'));

        $hash = $_POST['PAYMENT_ID'].':'.
        $_POST['PAYEE_ACCOUNT'].':'.
        $_POST['PAYMENT_AMOUNT'].':'.
        $_POST['PAYMENT_UNITS'].':'.
        $_POST['PAYMENT_BATCH_NUM'].':'.
        $_POST['PAYER_ACCOUNT'].':'.
        $secret.':'.
        $_POST['TIMESTAMPGMT'] ;


        $hash = strtoupper(md5($hash));

        if ($hash != $_POST['V2_HASH']) exit ('error');

        //write rest of codes
        
    }
}
