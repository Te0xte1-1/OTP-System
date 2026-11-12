<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otp_controller extends Controller
{
    public function otp()
    {

        $otp_code = rand(1, 1000000000);
        return view('otp', compact($otp_code));
    }
}
