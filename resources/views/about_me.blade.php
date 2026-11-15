@extends('layout.app')

@section('title', 'About Me')

@section('content')

    <div class="min-h-screen bg-slate-50 py-12 px-4">

        <div class="max-w-5xl mx-auto">

            {{-- Hero Section --}}
            <div class="bg-white rounded-3xl shadow-lg border border-slate-200
                    overflow-hidden mb-10">

                <div class="grid grid-cols-1 md:grid-cols-2">

                    {{-- Personal Information --}}
                    <div class="p-8 md:p-12 flex flex-col justify-center">

                        <span class="text-indigo-600 font-semibold text-sm mb-3">
                            HELLO, I'M
                        </span>

                        <h1 class="text-4xl font-bold text-slate-800 mb-4">
                            Your Name
                        </h1>

                        <h2 class="text-xl font-semibold text-indigo-600 mb-5">
                            Laravel Developer
                        </h2>

                        <p class="text-slate-500 leading-8 text-sm">
                            I am a passionate web developer interested in
                            building modern, responsive and user-friendly
                            web applications using Laravel, PHP and Tailwind CSS.
                            I enjoy learning new technologies and solving
                            programming challenges.
                        </p>

                        {{-- Buttons --}}
                        <div class="flex flex-wrap gap-3 mt-8">

                            <a href="{{ asset('files/my-cv.pdf') }}" download
                                class="inline-flex items-center gap-2 bg-indigo-600
                                  hover:bg-indigo-700 text-white px-6 py-3
                                  rounded-xl font-semibold transition shadow-md">

                                <i class="fa fa-download"></i>
                                Download CV

                            </a>

                            <a href="#contact"
                                class="inline-flex items-center gap-2 border
                                  border-indigo-600 text-indigo-600
                                  hover:bg-indigo-50 px-6 py-3 rounded-xl
                                  font-semibold transition">

                                <i class="fa fa-envelope"></i>
                                Contact Me

                            </a>

                        </div>

                    </div>

                    {{-- Profile Image --}}
                    <div class="bg-indigo-50 flex items-center justify-center p-10">

                        <div
                            class="w-64 h-64 rounded-full bg-white border-8
                                border-white shadow-xl overflow-hidden
                                flex items-center justify-center">

                            <img src="{{ asset('images/profile.jpg') }}" alt="My Profile"
                                class="w-full h-full object-cover">

                        </div>

                    </div>

                </div>

            </div>

            {{-- About Me Section --}}
            <div class="bg-white rounded-2xl shadow-md border border-slate-200
                    p-8 mb-8">

                <h2 class="text-2xl font-bold text-slate-800 mb-5">

                    <i class="fa fa-user text-indigo-600 mr-2"></i>
                    About Me

                </h2>

                <p class="text-slate-500 leading-8">

                    I am a dedicated developer who loves creating useful
                    applications and developing my programming skills.
                    My goal is to build high-quality software and continuously
                    improve my knowledge in web development.

                </p>

            </div>

            {{-- Skills Section --}}
            <div class="bg-white rounded-2xl shadow-md border border-slate-200
                    p-8 mb-8">

                <h2 class="text-2xl font-bold text-slate-800 mb-6">

                    <i class="fa fa-code text-indigo-600 mr-2"></i>
                    My Skills

                </h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">

                    @php
                        $skills = [
                            'PHP',
                            'Laravel',
                            'MySQL',
                            'HTML',
                            'CSS',
                            'Tailwind CSS',
                            'JavaScript',
                            'Git & GitHub',
                        ];
                    @endphp

                    @foreach ($skills as $skill)
                        <div
                            class="bg-indigo-50 text-indigo-700 rounded-xl
                                p-4 text-center font-semibold
                                hover:bg-indigo-100 transition">

                            {{ $skill }}

                        </div>
                    @endforeach

                </div>

            </div>

            {{-- Contact Section --}}
            <div id="contact" class="bg-white rounded-2xl shadow-md border border-slate-200
                    p-8">

                <div class="text-center mb-8">

                    <h2 class="text-2xl font-bold text-slate-800 mb-3">
                        Get In Touch
                    </h2>

                    <p class="text-slate-500 text-sm">
                        Have a project or question? Feel free to contact me.
                    </p>

                </div>

                {{-- Contact Form --}}
                <form action="" method="POST" class="space-y-5">

                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>

                            <label
                                class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                                Your Name

                            </label>

                            <input type="text" name="name" placeholder="Enter your name" required
                                class="w-full px-4 py-3 rounded-xl border
                                   border-slate-200 bg-slate-50
                                   outline-none focus:border-indigo-500
                                   focus:ring-4 focus:ring-indigo-100
                                   transition">

                        </div>

                        <div>

                            <label
                                class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                                Your Email

                            </label>

                            <input type="email" name="email" placeholder="example@email.com" required
                                class="w-full px-4 py-3 rounded-xl border
                                   border-slate-200 bg-slate-50
                                   outline-none focus:border-indigo-500
                                   focus:ring-4 focus:ring-indigo-100
                                   transition">

                        </div>

                    </div>

                    <div>

                        <label class="block text-sm font-semibold
                                  text-slate-700 mb-2">

                            Subject

                        </label>

                        <input type="text" name="subject" placeholder="Enter message subject" required
                            class="w-full px-4 py-3 rounded-xl border
                               border-slate-200 bg-slate-50
                               outline-none focus:border-indigo-500
                               focus:ring-4 focus:ring-indigo-100
                               transition">

                    </div>

                    <div>

                        <label class="block text-sm font-semibold
                                  text-slate-700 mb-2">

                            Message

                        </label>

                        <textarea name="message" rows="5" placeholder="Write your message here..." required
                            class="w-full px-4 py-3 rounded-xl border
                               border-slate-200 bg-slate-50 resize-none
                               outline-none focus:border-indigo-500
                               focus:ring-4 focus:ring-indigo-100
                               transition"></textarea>

                    </div>

                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700
                           text-white font-semibold py-3 rounded-xl
                           shadow-md transition duration-300">

                        <i class="fa fa-paper-plane mr-2"></i>
                        Send Message

                    </button>

                </form>

            </div>

            {{-- Social Media --}}
            <div class="text-center mt-10">

                <h3 class="text-lg font-bold text-slate-800 mb-5">
                    Follow Me
                </h3>

                <div class="flex items-center justify-center gap-5">

                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer"
                        class="w-12 h-12 flex items-center justify-center
                          bg-white border border-slate-200 rounded-xl
                          text-slate-700 hover:bg-indigo-600
                          hover:text-white transition">

                        <i class="fab fa-github text-xl"></i>

                    </a>

                    <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer"
                        class="w-12 h-12 flex items-center justify-center
                          bg-white border border-slate-200 rounded-xl
                          text-slate-700 hover:bg-indigo-600
                          hover:text-white transition">

                        <i class="fab fa-linkedin-in text-xl"></i>

                    </a>

                    <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer"
                        class="w-12 h-12 flex items-center justify-center
                          bg-white border border-slate-200 rounded-xl
                          text-slate-700 hover:bg-indigo-600
                          hover:text-white transition">

                        <i class="fab fa-instagram text-xl"></i>

                    </a>

                </div>

                <p class="text-slate-400 text-sm mt-8">
                    © {{ date('Y') }} Your Name. All rights reserved.
                </p>

            </div>

        </div>

    </div>

@endsection
