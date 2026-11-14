<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OtpController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
        ]);

        $code = (string) random_int(100000, 999999);

        Otp::where('phone', $request->phone)
            ->where('used', false)
            ->update(['used' => true]);

        Otp::create([
            'phone' => $request->phone,
            'code_hash' => Hash::make($code),
            'expires_at' => now()->addMinutes(5),
        ]);
        // للتجربة فقط، لا تعرض الرمز في الإنتاج
        return response()->json([
            'message' => 'OTP generated successfully',
            'otp' => $code,
        ]);
    }
    public function verify(Request $request)
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

        return response()->json([
            'message' => 'Phone verified successfully'
        ]);
    }

    public function otp(request $request)
    {
        $otp_code = rand(100000, 999999);
        return view('otp', compact('otp_code'));
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
        return view('forget');
    }
    public function verfication()
    {
        return view('verfication');
    }
}
