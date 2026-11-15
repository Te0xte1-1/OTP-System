<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Modern Tailwind Website</title>

    <script src="{{ url('https://cdn.tailwindcss.com') }}"></script>
</head>

<body>
    <div class="container-fluid relative">
        <!-- Section Navbar -->
        <nav class="mt-0 ml-0 flex h-16 w-full items-center justify-between bg-white p-1.5">
            <h2 class="font-bold text-white">Logo</h2>
            <ul class="flex items-center mx-auto -translate-x-10">
                <li class="inline-block">
                    <a href="{{ route('sign_in') }}" class="ml-4 font-bold text-blue-600 hover:text-blue-600">Sign In</a>
                </li>
                <li class="inline-block">
                    <a href="{{ route('sign_up') }}" class="ml-4 font-bold text-blue-600 hover:text-blue-600">Sign
                        Up</a>
                </li>

            </ul>

        </nav>

        <!-- section hero -->
        <section class="flex h-96 w-full items-center bg-gray-100 p-1">
            <div class="mx-auto max-w-7xl px-6 text-center">
                <h3 class="inline-block rounded-2xl border border-indigo-500 bg-indigo-800 px-3 font-bold text-white">
                    Web development
                </h3>
                <br />
                <p class="mt-6 text-5xl font-bold tracking-tight shadow-blue-500 md:text-7xl">
                    Build Beautiful Websites<br /><span class="text-cyan-50">In world</span>
                </p>
                <br />
                <button
                    class="rounded-2xl bg-cyan-700 p-2.5 font-bold text-white hover:bg-gray-700 hover:text-gray-500">
                    Exit
                </button>
                <button
                    class="w-1xl rounded-2xl bg-gray-900 p-2.5 font-bold text-indigo-500 hover:bg-gray-400 hover:text-gray-500">
                    Show World us
                </button>
            </div>
        </section>


    </div>
</body>

</html>
