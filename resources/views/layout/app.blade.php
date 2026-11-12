<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Default App Title')</title>
    @vite('resources/css/app.css')


</head>

<body>
    <!-- Navbar -->
    <nav class="w-full bg-white border-b border-gray-200 shadow-xl shadow-gray-400 px-4 py-2 ">
        <div class="flex items-center justify-between">

            <!-- Left Links -->
            <div class="flex items-center gap-4">

                <!-- Menu Button -->
                <button type="button"
                    class="text-gray-600 hover:text-indigo-600 p-2 rounded-lg hover:bg-gray-100 transition">

                </button>

                <!-- Home -->
                <a href="{{ url('/sign_in') }}"
                    class="hidden sm:block text-gray-700 hover:text-indigo-600 font-medium text-sm transition">
                    Sign In
                </a>

                <!-- Contact -->
                <a href="{{ url('/sign_up') }}"
                    class="hidden sm:block text-gray-700 hover:text-indigo-600 font-medium text-sm transition">
                    Sign Up
                </a>
                <!-- Contact -->
                <a href="{{ url('/otp') }}"
                    class="hidden sm:block text-gray-700 hover:text-indigo-600 font-medium text-sm transition">
                    OTP
                </a>

            </div>

            <!-- Right Links -->
            <div class="flex items-center gap-2 sm:gap-4">
                <!-- Search -->
                <button type="button"
                    class="text-gray-600 hover:text-indigo-600 p-2 rounded-lg hover:bg-gray-100 transition">

                </button>

                <!-- Notifications -->
                <div class="relative">
                    <button type="button"
                        class="relative text-gray-600 hover:text-indigo-600 p-2 rounded-lg hover:bg-gray-100 transition">

                        <span
                            class="absolute top-0 right-0 bg-red-500 text-black text-xs w-4 h-4 flex items-center justify-center rounded-full">
                            3
                        </span>
                    </button>
                </div>
            </div>

        </div>

    </nav>
    <!-- End Navbar -->

    <div class="w-full bg-gray-100">
        <!-- main content -->
        <main class="flex-1 w-full px-4 py-6 sm:py-8">
            @yield('content')
        </main>
    </div>
    <footer class="bg-white fixed bottom-0 left-0 w-full shadow-lg p-3 z-50">
        <strong>
            Copyright &copy; 2026
            <a href="#">AdminLTE.io</a>.
        </strong>
        All rights reserved.
    </footer>

    @stack('scripts')
</body>

</html>
