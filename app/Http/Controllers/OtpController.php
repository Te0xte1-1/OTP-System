<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OtpController extends Controller
{

    public function otp(request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
        ]);

        $code = random_int(100000, 999999);

        Otp::where('phone', $request->phone)
            ->where('used', false)
            ->update(['used' => true]);

        Otp::create([
            'phone' => $request->phone,
            'code_hash' => Hash::make($code),
            'expires_at' => now()->addMinutes(5),
        ]);


        return view('otp.otp', compact('code'));
    }
    public function sign_in()
    {
        return view('sign_in');
    }
    public function sign_up()
    {
        return view('sign_up');
    }
    public function forget()
    {
        return view('otp.forget');
    }
    public function verfication(request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
            'code' => 'required|digits:6',
        ]);

        $otp = Otp::where('phone', $request->phone)
            ->where('used', false)
            ->latest()
            ->first();

        if (
            !$otp ||
            $otp->expires_at->isPast() ||
            !Hash::check($request->code, $otp->code_hash)
        ) {

            return response()->json(
                [
                    'message' => 'Invalid or expired OTP'
                ],
                422
            );
        }

        $otp->update(['used' => true]);


        return view('otp.verfication');
    }
}
