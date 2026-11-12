@extends('layout.app')
@section('title', 'OTP Page')
@section('content')

    <body class="min-h-screen bg-gray-100">
        {{-- start wrapper tag --}}

        <div class="p-3 flex justify-center items-center">
            <div class="bg-[#FFFFFF] w-80 p-5 border border-1xl border-gray-300 shadow-xl rounded-xl">
                <h4 class="text-gray-900 text-center capitalize font-semibold">
                    welcome back To OTP
                </h4>
                <p class="text-black text-center capitalize text-sm whitespace-normal tracking-wide mt-2 leading-6">
                    Your OTP Code ()
                </p>
                <br />
                <div class="group-label">
                    <label for="email" class="font-semibold text-sm text-gray-900 capitalize mr-4">Email</label>
                    <br />
                    <input type="email" name="email" id="email" placeholder="Enter Your Email"
                        class="p-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>
                <div class="my-3">

                    <button
                        class="bg-indigo-700 text-white p-1.5 w-full cursor-pointer font-bold rounded-xl border border-gray-500 border-1xl hover:bg-indigo-800 hover:text-gray-200 hover:border-indigo-900">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    @endsection
