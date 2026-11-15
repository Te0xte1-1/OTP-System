@extends('layout.app')

@section('title', 'Sign up Page')

@section('content')

    <div class="min-h-screen flex items-center justify-center ">

        <div class="bg-white w-full max-w-xl p-6 sm:p-8 border border-slate-200 shadow-lg rounded-2xl">

            {{-- Header --}}
            <div class="text-center mb-8">
                <div
                    class="w-14 h-14 bg-indigo-100 text-indigo-700 rounded-2xl
                        flex items-center justify-center mx-auto mb-4">
                    <i class="fa fa-user-plus text-2xl"></i>
                </div>

                <h2 class="text-2xl font-bold text-slate-800">
                    Create Your Account
                </h2>

                <p class="text-sm text-slate-500 mt-2">
                    Join us and enjoy a better shopping experience.
                </p>

            </div>

            {{-- Form --}}
            <form action="" method="POST" class="space-y-5">

                @csrf

                {{-- First Name & Last Name --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    {{-- First Name --}}
                    <div>
                        <label for="first_name" class="block text-sm font-semibold text-slate-700 mb-2">
                            First Name
                        </label>
                        <div class="relative">
                            <i
                                class="fa fa-user absolute left-4 top-1/2
                                  -translate-y-1/2 text-slate-400"></i>

                            <input type="text" name="first_name" id="first_name" placeholder="Enter first name"
                                class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                                   border border-slate-200 bg-slate-50
                                   text-slate-800 outline-none
                                   focus:border-indigo-500 focus:ring-4
                                   focus:ring-indigo-100 transition">

                        </div>
                    </div>
                    {{-- Last Name --}}
                    <div>
                        <label for="last_name" class="block text-sm font-semibold text-slate-700 mb-2">
                            Last Name
                        </label>

                        <div class="relative">

                            <i
                                class="fa fa-user absolute left-4 top-1/2
                                  -translate-y-1/2 text-slate-400"></i>

                            <input type="text" name="last_name" id="last_name" placeholder="Enter last name"
                                class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                                   border border-slate-200 bg-slate-50
                                   text-slate-800 outline-none
                                   focus:border-indigo-500 focus:ring-4
                                   focus:ring-indigo-100 transition">

                        </div>
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">
                        Email Address
                    </label>

                    <div class="relative">
                        <i
                            class="fa fa-envelope absolute left-4 top-1/2
                              -translate-y-1/2 text-slate-400"></i>

                        <input type="email" name="email" id="email" placeholder="example@email.com"
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                               border border-slate-200 bg-slate-50
                               text-slate-800 outline-none
                               focus:border-indigo-500 focus:ring-4
                               focus:ring-indigo-100 transition">
                    </div>
                </div>

                {{-- Password --}}
                <div>

                    <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">
                        Password
                    </label>

                    <div class="relative">

                        <i
                            class="fa fa-lock absolute left-4 top-1/2
                              -translate-y-1/2 text-slate-400"></i>

                        <input type="password" name="password" id="password" placeholder="Enter your password"
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                               border border-slate-200 bg-slate-50
                               text-slate-800 outline-none
                               focus:border-indigo-500 focus:ring-4
                               focus:ring-indigo-100 transition">

                    </div>

                </div>

                {{-- Confirm Password --}}
                <div>

                    <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">
                        Confirm Password
                    </label>

                    <div class="relative">

                        <i
                            class="fa fa-shield-alt absolute left-4 top-1/2
                              -translate-y-1/2 text-slate-400"></i>

                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm your password"
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                               border border-slate-200 bg-slate-50
                               text-slate-800 outline-none
                               focus:border-indigo-500 focus:ring-4
                               focus:ring-indigo-100 transition">

                    </div>

                </div>

                {{-- Remember Me --}}
                <div class="flex items-center justify-between text-sm">

                    <label class="flex items-center gap-2 text-slate-600 cursor-pointer">

                        <input type="checkbox" name="remember" class="w-4 h-4 accent-indigo-600 rounded">

                        Remember Me

                    </label>

                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700
                       text-white font-semibold py-3 rounded-xl
                       shadow-md shadow-indigo-100
                       hover:shadow-lg transition duration-300 cursor-pointer">

                    Create Account

                    <i class="fa fa-arrow-right ml-2"></i>

                </button>

            </form>

            {{-- Login Link --}}
            <p class="text-center text-sm text-slate-500 mt-4">

                Already have an account?

                <a href="{{ route('sign_in') }}" class="text-indigo-600 font-bold hover:underline">
                    Sign In
                </a>

            </p>

        </div>

    </div>

@endsection
