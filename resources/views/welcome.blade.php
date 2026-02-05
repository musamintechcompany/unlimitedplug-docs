<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlimited Plug - Documentation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white dark:bg-[#161615] shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <h1 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Unlimited Plug</h1>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mt-1">Documentations</p>
            </div>
        </header>

        <main class="flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <section class="mb-16">
                    <h2 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC] mb-6">Available Documentation</h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <a href="{{ route('docs.starter-kits.laravel-saas-starter-kit-v1.index') }}" class="block p-6 bg-white dark:bg-[#161615] rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Laravel SaaS Starter Kit</h3>
                                    <span class="inline-block px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-300 rounded-full text-xs font-semibold">v1.0</span>
                                </div>
                                <svg class="w-6 h-6 text-[#706f6c] dark:text-[#A1A09A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </section>

                <section>
                    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-6">
                        <h3 class="font-semibold text-blue-900 dark:text-blue-300 mb-2">Need Help?</h3>
                        <p class="text-blue-800 dark:text-blue-400 text-sm">Browse our comprehensive documentation to get started with your project quickly and efficiently.</p>
                    </div>
                </section>
            </div>
        </main>

        <footer class="bg-white dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A] mt-auto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <p class="text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">&copy; {{ date('Y') }} Unlimited Plug. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
