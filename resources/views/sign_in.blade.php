@extends('layout.app')

@section('title', 'Sign in Page')

@section('content')

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="bg-white w-full max-w-md p-6 sm:p-8 border border-slate-200 shadow-lg rounded-2xl">

            {{-- Header --}}
            <div class="text-center mb-5">

                <div
                    class="w-14 h-14 bg-indigo-100 text-indigo-700 rounded-2xl
                        flex items-center justify-center mx-auto mb-4">

                    <i class="fa fa-user text-2xl"></i>

                </div>

                <h2 class="text-2xl font-bold text-slate-800">
                    Welcome Back!
                </h2>

                <p class="text-sm text-slate-500 mt-2">
                    Access your orders, wishlist and exclusive offers.
                </p>

            </div>

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div
                    class="bg-red-50 border border-red-100 text-red-600
                        p-3 rounded-xl mb-2 text-sm">

                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach

                </div>
            @endif

            {{-- Success Message --}}
            @if (session('success'))
                <div
                    class="bg-green-50 border border-green-100 text-green-600
                        p-3 rounded-xl mb-5 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Login Form --}}
            <form action="" method="POST" class="space-y-2">

                @csrf

                {{-- Email --}}
                <div>

                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">

                        Email Address

                    </label>

                    <div class="relative">

                        <i
                            class="fa fa-envelope absolute left-4 top-1/2
                              -translate-y-1/2 text-slate-400"></i>

                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            placeholder="example@email.com" required
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

                        <input type="password" name="password" id="password" placeholder="Enter your password" required
                            class="w-full pl-11 pr-4 py-3 text-sm rounded-xl
                               border border-slate-200 bg-slate-50
                               text-slate-800 outline-none
                               focus:border-indigo-500 focus:ring-4
                               focus:ring-indigo-100 transition">

                    </div>

                </div>

                {{-- Remember & Forgot Password --}}
                <div class="flex items-center justify-between text-sm">

                    <label class="flex items-center gap-2 text-slate-600 cursor-pointer">

                        <input type="checkbox" name="remember" id="remember" value="1"
                            class="w-4 h-4 accent-indigo-600 rounded">

                        Remember Me

                    </label>

                    <a href="{{ route('forget') }}" class="text-indigo-600 font-medium hover:text-indigo-800 transition">

                        Forgot Password?

                    </a>

                </div>

                {{-- Submit Button --}}
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700
                       text-white font-semibold py-3 rounded-xl
                       shadow-md shadow-indigo-100
                       hover:shadow-lg transition duration-300 cursor-pointer">

                    Sign In

                    <i class="fa fa-arrow-right ml-2"></i>

                </button>

            </form>

            {{-- Divider --}}
            <div class="flex items-center gap-4 my-6">

                <div class="flex-1 border-t border-slate-200"></div>

                <span class="text-xs text-slate-400 font-medium">
                    OR CONTINUE WITH
                </span>

                <div class="flex-1 border-t border-slate-200"></div>

            </div>

            {{-- Social Login --}}
            <div class="grid grid-cols-2 gap-3">

                <a href="#"
                    class="flex items-center justify-center gap-2
                      border border-slate-200 rounded-xl py-3
                      text-sm font-semibold text-slate-700
                      hover:bg-slate-50 transition">

                    <i class="fab fa-google text-red-500"></i>

                    Google

                </a>

                <a href="#"
                    class="flex items-center justify-center gap-2
                      border border-slate-200 rounded-xl py-3
                      text-sm font-semibold text-slate-700
                      hover:bg-slate-50 transition">

                    <i class="fab fa-apple text-black"></i>

                    Apple

                </a>

            </div>

            {{-- Register Link --}}
            <p class="text-center text-sm text-slate-500 mt-7">

                Don't have an account?

                <a href="{{ route('sign_up') }}" class="text-indigo-600 font-bold hover:underline">

                    Create Account

                </a>

            </p>

        </div>

    </div>

@endsection
