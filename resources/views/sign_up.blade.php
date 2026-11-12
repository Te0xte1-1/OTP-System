@extends('layout.app')
@section('title', 'Sign up Page')
@section('content')

    <div class="p-1 flex items-center justify-center ">
        <div class="bg-[#FFFFFF] w-full max-w-sm p-4 border -translate-y-4   border-gray-300 shadow-xl rounded-xl">
            <h4 class="text-gray-700 text-center capitalize font-bold text-xl ">
                Create new an account
            </h4>
            <p class="text-black text-center capitalize text-sm whitespace-normal tracking-wide mt-2 ">
                access your orders wishlist and exclusive by logging in
            </p>
            <form action="" method="post">
                @csrf
                {{-- Full Name input --}}
                <div class="mb-3">
                    <i class="fa fa-user"></i> <label
                        for="Full Name"class="font-semibold text-sm text-gray-900 capitalize mr-4">Full Name</label>

                    <input type="text" name="Full Name" id="Full Name" placeholder="Enter Your Full Name"
                        class="px-3 py-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>
                {{-- Username input --}}
                <div class="mb-3">
                    <label for="username"class="font-semibold text-sm text-gray-900 capitalize mr-4">username</label>

                    <input type="text" name="username" id="username" placeholder="Enter Your username"
                        class="px-3 py-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>
                {{-- Email input --}}
                <div class="mb-3">
                    <label for="email"class="font-semibold text-sm text-gray-900 capitalize mr-4">Email</label>

                    <input type="email" name="email" id="email" placeholder="Enter Your Email"
                        class="px-3 py-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>

                {{-- Password input --}}
                <div class="mb-2">
                    <label for="password" class="font-semibold text-sm text-gray-900 capitalize mr-4">password</label>

                    <input type="password" name="password" id="password" placeholder="Enter Your Password"
                        class="px-3 py-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white" />
                </div>

                <!-- Remember & Forgot Password -->
                <div class="flex items-center justify-between mb-3 text-sm">

                    <label for="remember" class="flex items-center gap-2 text-gray-600">
                        <input type="checkbox" name="remember" id="remember" class="accent-indigo-600" />
                        Remember Me
                    </label>

                    <a href="#" class="text-indigo-600 hover:text-indigo-800 cursor-pointer transition">
                        Forgot Password?
                    </a>

                </div>
                {{-- Submit button --}}
                <button type="submit"
                    class="bg-indigo-700 text-white py-1.5 w-full font-bold rounded-lg hover:bg-indigo-800 duration-300">
                    Submit
                </button>
            </form>

            <!-- Divider -->
            <div class="flex items-center gap-3 my-2">
                <div class="flex-1 border-t border-gray-200"></div>
                <span class="text-gray-400 text-sm">OR</span>
                <div class="flex-1 border-t border-gray-200"></div>
            </div>
            <!-- Social Login -->
            <div class="">
                <a href="#"
                    class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-sm m-2 p-1 rounded-lg transition">
                    Continue with Google
                </a>
                <a href="#"
                    class="block text-center bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-sm m-2 p-1 rounded-lg transition">
                    Continue with Apple
                </a>
            </div>
        </div>
    </div>

@endsection
