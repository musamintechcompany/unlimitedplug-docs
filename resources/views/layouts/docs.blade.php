<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Unlimited Plug</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/vs2015.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .code-block {
            background: #1e1e1e;
            border-radius: 8px;
            overflow: hidden;
            margin: 1rem 0;
        }
        .code-header {
            background: #2d2d30;
            padding: 0.5rem 1rem;
            border-bottom: 1px solid #3e3e42;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .code-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        .code-content {
            position: relative;
        }
        .code-content pre {
            margin: 0;
            padding: 1rem;
            background: #1e1e1e;
            overflow-x: auto;
        }
        .code-content code {
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        .copy-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: #3e3e42;
            border: none;
            padding: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.2s;
        }
        .code-block:hover .copy-btn {
            opacity: 1;
        }
        .copy-btn:hover {
            background: #505050;
        }
        .diff-remove {
            background: rgba(255, 0, 0, 0.2);
            display: block;
            margin: 0 -1rem;
            padding: 0 1rem;
        }
        .diff-add {
            background: rgba(0, 255, 0, 0.2);
            display: block;
            margin: 0 -1rem;
            padding: 0 1rem;
        }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <div class="min-h-screen">
        <header class="bg-white dark:bg-[#161615] shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Unlimited Plug</a>
                    <span class="hidden sm:inline text-[#706f6c] dark:text-[#A1A09A]">/</span>
                    <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.index') }}" class="hidden sm:inline text-sm font-medium text-[#706f6c] dark:text-[#A1A09A] hover:text-[#1b1b18] dark:hover:text-[#EDEDEC]">Laravel SaaS Starter Kit v1</a>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-sm text-[#706f6c] dark:text-[#A1A09A] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-full px-3 py-1">
                        <span class="hidden sm:inline">Laravel 12.x</span>
                        <span class="sm:hidden">v12.x</span>
                    </div>
                    <button id="menuButton" onclick="toggleMenu()" class="lg:hidden p-2 text-[#1b1b18] dark:text-[#EDEDEC]">
                        <svg id="hamburgerIcon" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile Menu Overlay -->
        <!-- Mobile Menu Overlay -->
        <div id="mobileMenu" class="fixed top-16 left-0 right-0 bg-white dark:bg-[#161615] shadow-lg z-40 lg:hidden transform -translate-y-full transition-transform duration-300 ease-in-out overflow-y-auto max-h-[calc(100vh-4rem)]">
            <nav class="p-6 space-y-1">
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.index') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.index') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Overview</a>
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Get Started</a>
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.installation') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.installation') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Installation</a>
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.features') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.features') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Features</a>
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.configuration') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.configuration') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Configuration</a>
                <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.deployment') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.deployment') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Deployment</a>
            </nav>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <aside class="hidden lg:block lg:col-span-3 mb-8 lg:mb-0">
                    <nav class="sticky top-24 space-y-1">
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.index') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.index') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Overview</a>
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.get-started') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Get Started</a>
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.installation') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.installation') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Installation</a>
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.features') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.features') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Features</a>
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.configuration') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.configuration') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Configuration</a>
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.deployment') }}" class="block px-4 py-2 text-sm rounded-lg {{ request()->routeIs('docs.starter-kits.laravel-saas-starter-kit-v1.deployment') ? 'bg-[#dbdbd7] dark:bg-[#3E3E3A] text-[#1b1b18] dark:text-[#EDEDEC] font-semibold' : 'text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#dbdbd7] dark:hover:bg-[#3E3E3A]' }}">Deployment</a>
                    </nav>
                </aside>

                <main class="lg:col-span-9">
                    <div class="bg-white dark:bg-[#161615] rounded-lg shadow-sm p-6 sm:p-8 lg:p-12">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
        
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            const hamburger = document.getElementById('hamburgerIcon');
            const close = document.getElementById('closeIcon');
            
            menu.classList.toggle('-translate-y-full');
            hamburger.classList.toggle('hidden');
            close.classList.toggle('hidden');
        }
        
        function copyToClipboard(text, button) {
            navigator.clipboard.writeText(text).then(function() {
                const originalIcon = button.innerHTML;
                button.innerHTML = '<svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                setTimeout(() => {
                    button.innerHTML = originalIcon;
                }, 2000);
            });
        }
        
        function copyCode(button) {
            const codeBlock = button.closest('.code-block');
            const code = codeBlock.querySelector('code').textContent;
            navigator.clipboard.writeText(code).then(function() {
                button.innerHTML = '<svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
                setTimeout(() => {
                    button.innerHTML = '<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>';
                }, 2000);
            });
        }
    </script>
</body>
</html>
