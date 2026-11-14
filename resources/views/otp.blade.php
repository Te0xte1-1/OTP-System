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
                    Your OTP Code
                </p>
                <br>
                <span class="text-center block font-bold capitalize text-indigo-600">
                    {{ $otp_code }}
                </span>
                <br />
                <div class="my-3">

                    <button
                        class="bg-indigo-700 text-white p-1.5 w-full cursor-pointer font-bold rounded-xl border border-gray-500 border-1xl hover:bg-indigo-800 hover:text-gray-200 hover:border-indigo-900">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    @endsection
