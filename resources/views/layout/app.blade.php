<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Default App Title')</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ url('css/fontawesome-free/css/all.css') }}">


</head>

<body>

    <!-- Navbar -->
    <nav class="w-full bg-white/95 backdrop-blur-md border-b border-slate-200
            shadow-sm sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-2 group">

                    <div
                        class="w-10 h-10 bg-indigo-600 text-white rounded-xl
                            flex items-center justify-center
                            group-hover:bg-indigo-700 transition">

                        <i class="fa fa-code text-lg"></i>

                    </div>

                    <span class="text-xl font-bold text-slate-800">
                        My<span class="text-indigo-600">Website</span>
                    </span>

                </a>

                {{-- Navigation Links --}}
                <div class="hidden md:flex items-center gap-2">

                    <a href="{{ url('/') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold
                          text-slate-600 hover:text-indigo-600
                          hover:bg-indigo-50 transition">

                        <i class="fa fa-home mr-1"></i>
                        Home

                    </a>

                    <a href="{{ route('about_me') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold
                          text-slate-600 hover:text-indigo-600
                          hover:bg-indigo-50 transition">

                        <i class="fa fa-user mr-1"></i>
                        About Me

                    </a>

                    <a href="{{ route('sign_in') }}"
                        class="px-4 py-2 rounded-lg text-sm font-semibold
                          text-slate-600 hover:text-indigo-600
                          hover:bg-indigo-50 transition">

                        Sign In

                    </a>

                    <a href="{{ route('sign_up') }}"
                        class="px-5 py-2 rounded-lg text-sm font-semibold
                          bg-indigo-600 text-white hover:bg-indigo-700
                          shadow-sm hover:shadow-md transition">

                        Sign Up

                    </a>

                </div>

                {{-- Right Actions --}}
                <div class="flex items-center gap-2">

                    {{-- Search --}}
                    <button type="button"
                        class="w-10 h-10 flex items-center justify-center
                               text-slate-500 hover:text-indigo-600
                               hover:bg-indigo-50 rounded-xl transition">

                        <i class="fa fa-search text-lg"></i>

                    </button>

                    {{-- Notifications --}}
                    <button type="button"
                        class="relative w-10 h-10 flex items-center
                               justify-center text-slate-500
                               hover:text-indigo-600 hover:bg-indigo-50
                               rounded-xl transition">

                        <i class="fa fa-bell text-lg"></i>

                        <span
                            class="absolute top-1 right-1 w-4 h-4
                                 bg-red-500 text-white text-[10px]
                                 font-bold flex items-center justify-center
                                 rounded-full border-2 border-white">

                            3

                        </span>

                    </button>

                    {{-- Mobile Menu Button --}}
                    <button type="button" id="menuBtn"
                        class="md:hidden w-10 h-10 flex items-center
                               justify-center text-slate-600
                               hover:bg-slate-100 rounded-xl transition">

                        <i class="fa fa-bars text-xl"></i>

                    </button>

                </div>

            </div>

            {{-- Mobile Navigation --}}
            <div id="mobileMenu" class="hidden md:hidden border-t border-slate-100 py-3">

                <div class="flex flex-col gap-2">

                    <a href="{{ url('/') }}"
                        class="px-4 py-3 rounded-lg text-sm font-semibold
                          text-slate-600 hover:bg-indigo-50 hover:text-indigo-600">

                        <i class="fa fa-home mr-2"></i>
                        Home

                    </a>

                    <a href="{{ url('/about') }}"
                        class="px-4 py-3 rounded-lg text-sm font-semibold
                          text-slate-600 hover:bg-indigo-50 hover:text-indigo-600">

                        <i class="fa fa-user mr-2"></i>
                        About Me

                    </a>

                    <a href="{{ url('/sign_in') }}"
                        class="px-4 py-3 rounded-lg text-sm font-semibold
                          text-slate-600 hover:bg-indigo-50 hover:text-indigo-600">

                        <i class="fa fa-sign-in mr-2"></i>
                        Sign In

                    </a>

                    <a href="{{ url('/sign_up') }}"
                        class="px-4 py-3 rounded-lg text-sm font-semibold
                          text-indigo-600 hover:bg-indigo-50">

                        <i class="fa fa-user-plus mr-2"></i>
                        Sign Up

                    </a>

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
            <a href="{{ route('about_me') }}">Nasr Alden Osman</a>.
        </strong>
        All rights reserved.
    </footer>

    @stack('scripts')
</body>
{{-- Mobile Menu Script --}}
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', function() {

        mobileMenu.classList.toggle('hidden');

        const icon = menuBtn.querySelector('i');

        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');

    });
</script>

</html>
