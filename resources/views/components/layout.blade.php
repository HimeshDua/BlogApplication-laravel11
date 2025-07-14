<!DOCTYPE html>
<html lang="en" class="bg-background text-foreground">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title ?? 'Blog App' }} - Blog App By Himesh Dua</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
</head>

<body class="min-h-screen bg-background text-foreground overflow-x-hidden">
    <header class="bg-card border-b border-border shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center relative">
            <a href="{{ Auth::check() ? (Auth::user()->is_admin ? route('admin.dashboard') : route('user.dashboard')) : route('login') }}"
                class="text-xl font-bold text-primary hover:text-primary/80 transition-colors">
                Blog App
            </a>

            <button id="menu-toggle" class="sm:hidden text-foreground focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="mobile-menu"
                class="absolute sm:static top-full left-0 w-full sm:w-auto bg-card sm:bg-transparent z-50 sm:flex sm:items-center sm:space-x-6 space-y-4 sm:space-y-0 px-4 sm:px-0 py-4 sm:py-0 hidden sm:flex-row flex-col mt-2 sm:mt-0 border-t sm:border-none border-border">

                <ul class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 w-full sm:w-auto">
                    @auth
                        @can('isUser')
                            <li><a href="{{ route('user.dashboard') }}"
                                    class="btn btn-link w-full sm:w-auto text-left">Posts</a>
                            </li>
                            <li><a href="{{ route('user.profile') }}"
                                    class="btn btn-link w-full sm:w-auto text-left">Profile</a></li>
                        @endcan

                        @can('isAdmin')
                            <li><a href="{{ route('admin.dashboard') }}"
                                    class="btn btn-link w-full sm:w-auto text-left">Dashboard</a></li>
                            <li><a href="{{ route('posts.create') }}" class="btn btn-link w-full sm:w-auto text-left">Create
                                    Post</a></li>
                        @endcan
                    @endauth
                </ul>

                <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 sm:ml-6 w-full sm:w-auto">
                    @auth
                        <span class="btn btn-outline w-full sm:w-auto text-sm">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto"
                            onsubmit="return confirmLogout(this);">
                            @csrf
                            <button type="submit" class="btn btn-destructive w-full sm:w-auto text-sm">
                                Logout
                            </button>
                        </form>

                        <script>
                            function confirmLogout(form) {
                                return confirm('Are you sure you want to logout?');
                            }
                        </script>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-link w-full sm:w-auto text-sm text-left">Log In</a>
                        <a href="{{ route('register') }}"
                            class="btn btn-link w-full sm:w-auto text-sm text-left">Register</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    @if (session('error'))
        <div class="max-w-4xl mx-auto px-4 sm:px-6 mt-6">
            <div class="bg-red-100 text-red-800 text-sm p-3 rounded-lg mb-4">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="max-w-4xl mx-auto px-4 sm:px-6 mt-6">
            <div class="bg-green-100 text-green-800 text-sm p-3 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (isset($section_title))
        <div class="max-w-4xl mx-auto px-4 sm:px-6 mt-10">
            <h1 class="text-3xl font-bold text-primary tracking-tight">
                {{ $section_title }}
            </h1>
        </div>
    @endif

    <main class="max-w-4xl relative min-h-[60vh] mx-auto px-4 sm:px-6 py-10 space-y-12">
        {{ $slot }}
    </main>

    <footer class="mt-12 py-6 border-t border-border text-center text-sm text-muted-foreground">
        &copy; {{ date('Y') }} Movie Box. All rights reserved.
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
``
