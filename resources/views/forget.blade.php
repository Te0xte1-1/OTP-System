@extends('layout.app')
@section('title', 'Forget Page')
@section('content')

    <body class="min-h-screen bg-gray-100">
        {{-- start wrapper tag --}}

        <div class="p-3 flex justify-center items-center">
            <div class="bg-[#FFFFFF] w-80 p-5 border border-1xl border-gray-300 shadow-xl rounded-xl">
                <h4 class="text-gray-900 text-center capitalize font-semibold">
                    Inter Your Number Phone
                </h4>

                <br />
                <div class="group-label">
                    <label for="Number Phone" class="font-semibold text-sm text-gray-900 capitalize mr-4">Number Phone</label>
                    <br />
                    <form action="{{ url('otp') }}" method="post">

                        <input type="text" name="phone" id="phone" required placeholder="Enter Your number"
                            class="p-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>

                <div class="my-3">
                    <button type="submit"
                        class="bg-indigo-700 text-white p-1.5 w-full cursor-pointer font-bold rounded-xl border border-gray-500 border-1xl hover:bg-indigo-800 hover:text-gray-200 hover:border-indigo-900">
                        Send
                    </button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
