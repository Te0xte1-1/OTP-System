<?php

namespace App\Http\Controllers;

use App\Models\Sign_In;
use Illuminate\Http\Request;

class Sign_In_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
        ]);


        $phone = $request->phone;

        Sign_In::where('phone', $request->phone)
            ->where('used', false)
            ->update(['used' => true]);

        Sign_In::create([
            'phone' => $request->phone,

            'expires_at' => now()->addMinutes(5),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sign_In $sign_In)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sign_In $sign_In)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sign_In $sign_In)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign_In $sign_In)
    {
        //
    }
}
