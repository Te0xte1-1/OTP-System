<?php

namespace App\Http\Controllers;

use App\Models\Sign_Up;
use Illuminate\Http\Request;

class Sign_Up_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:20',
        ]);


        $phone = $request->phone;

        Sign_Up::where('phone', $request->phone)
            ->where('used', false)
            ->update(['used' => true]);

        Sign_Up::create([
            'phone' => $request->phone,

            'expires_at' => now()->addMinutes(5),
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Sign_Up $sign_Up)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sign_Up $sign_Up)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sign_Up $sign_Up)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sign_Up $sign_Up)
    {
        //
    }
}
